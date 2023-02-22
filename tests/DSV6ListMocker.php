<?php

namespace Duckystudios\DSV6Adapter\Tests;

use Duckystudios\DSV6Adapter\Enums\Ausuebung;
use Duckystudios\DSV6Adapter\Enums\Country;
use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Meldegeldtyp;
use Duckystudios\DSV6Adapter\Enums\Technik;
use Duckystudios\DSV6Adapter\Enums\Wertungsklasse;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;
use Duckystudios\DSV6Adapter\enums\Zeitmessung;
use Duckystudios\DSV6Adapter\Enums\Zuordnung;
use Duckystudios\DSV6Adapter\Lists\Wettkampfdefinitionsliste;
use Duckystudios\DSV6Adapter\Objects\Abschnitt;
use Duckystudios\DSV6Adapter\Objects\Meldegeld;
use Duckystudios\DSV6Adapter\Objects\Pflichtzeit;
use Duckystudios\DSV6Adapter\Objects\Wettkampf;

class DSV6ListMocker
{
    public function mockWettkampfdefinitionsliste(): Wettkampfdefinitionsliste
    {
        $faker = \Faker\Factory::create();
        $list = new Wettkampfdefinitionsliste();

        $companyName = $faker->company();
        $version = $faker->randomNumber(1) . '.' . $faker->randomNumber(1) . '.' . $faker->randomNumber(1);
        $email = $faker->companyEmail();

        $ort = $faker->city();
        $laenge = $faker->randomElement(['50', '100', '200']);
        $zeitmessung = $faker->randomElement([Zeitmessung::AUTOMATISCH, Zeitmessung::HALB_AUTOMATISCH, Zeitmessung::HANDZEIT]);

        $list->defineErzeugerSoftware($companyName, $version, $email);
        $list->defineVeranstaltung('Testveranstaltung für DSV6Adapter', $ort, $laenge, $zeitmessung);
        $list->defineVeranstaltungsort($companyName, $faker->streetAddress(), $faker->randomNumber(5), $ort, Country::GERMANY, $faker->phoneNumber(), $faker->phoneNumber(), $email);
        $list->defineAusschreibungImNetz($faker->url());
        $list->defineVeranstalter($companyName);
        $list->defineAusrichter($companyName, new \Duckystudios\DSV6Adapter\Objects\Person($faker->firstNameMale(), $faker->lastName()), $faker->streetAddress(), $faker->randomNumber(5), $ort, Country::GERMANY, $faker->phoneNumber(), $faker->phoneNumber(), $email);
        $list->defineMeldeadresse($companyName, $faker->streetAddress(), $faker->randomNumber(5), $ort, Country::GERMANY, $faker->phoneNumber(), $faker->phoneNumber(), $email);
        $list->defineMeldeschluss('23.04.2023', '23:59');
        $list->defineBesonderes('Testveranstaltung für DSV6Adapter');
        $list->defineAbschnitte(
            new Abschnitt(1, "01.05.2023", "14:00", "14:30", "15:00"),
            new Abschnitt(2, "01.05.2023", "18:00", "18:30", "19:00"),
        );
        $list->defineWettkaempfe(
            new Wettkampf(1, Wettkampfart::VORLAUF, 1, 10, 50, Technik::FREISTIL, Ausuebung::ARME, Geschlecht::MAENNLICH, Zuordnung::DEFAULT_OR_UNKNOWN),
            new Wettkampf(2, Wettkampfart::ENTSCHEIDUNG, 1, 10, 50, Technik::FREISTIL, Ausuebung::ARME, Geschlecht::WEIBLICH, Zuordnung::DEFAULT_OR_UNKNOWN),
            new Wettkampf(3, Wettkampfart::VORLAUF, 2, 10, 100, Technik::FREISTIL, Ausuebung::ARME, Geschlecht::MAENNLICH, Zuordnung::DEFAULT_OR_UNKNOWN),
            new Wettkampf(4, Wettkampfart::ENTSCHEIDUNG, 2, 10, 100, Technik::FREISTIL, Ausuebung::ARME, Geschlecht::WEIBLICH, Zuordnung::DEFAULT_OR_UNKNOWN),
        );
        $list->definePflichtzeiten(
            new Pflichtzeit(1, Wettkampfart::VORLAUF, Wertungsklasse::ALTERSKLASSE, 10, 50, "00:00:55",  Geschlecht::MAENNLICH),
            new Pflichtzeit(3, Wettkampfart::VORLAUF, Wertungsklasse::ALTERSKLASSE, 10, 50, "00:01:30",  Geschlecht::MAENNLICH),
        );
        $list->defineMeldegelder(
            new Meldegeld(Meldegeldtyp::EINZELMELDEGELD, '2,50', 1),
            new Meldegeld(Meldegeldtyp::EINZELMELDEGELD, '3,00', 3),
        );

        return $list;
    }
}