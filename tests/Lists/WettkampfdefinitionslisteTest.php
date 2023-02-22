<?php

namespace Duckystudios\DSV6Adapter\Tests\Lists;

use Duckystudios\DSV6Adapter\Builders\DSV6FileBuilder;
use Duckystudios\DSV6Adapter\Data\Abschnitt;
use Duckystudios\DSV6Adapter\Data\Ausrichter;
use Duckystudios\DSV6Adapter\Data\AusschreibungImNetz;
use Duckystudios\DSV6Adapter\Data\Besonderes;
use Duckystudios\DSV6Adapter\Data\Erzeuger;
use Duckystudios\DSV6Adapter\Data\Format;
use Duckystudios\DSV6Adapter\Data\Meldeadresse;
use Duckystudios\DSV6Adapter\Data\Meldeschluss;
use Duckystudios\DSV6Adapter\Data\Veranstalter;
use Duckystudios\DSV6Adapter\Data\Veranstaltung;
use Duckystudios\DSV6Adapter\Data\Veranstaltungsort;
use Duckystudios\DSV6Adapter\Enums\Country;
use Duckystudios\DSV6Adapter\Enums\Zeitmessung;
use PHPUnit\Framework\TestCase;

class WettkampfdefinitionslisteTest extends TestCase
{
    public function testBuild() {
        $a = new Format('Vereinsmeldeliste');
        $b = new Erzeuger('dcky', '1.0.0', 'hey@dcky.io');
        $c = new Veranstaltung('Test', 'Düsseldorf', 50, Zeitmessung::HANDZEIT);
        $d = new Abschnitt(1, '01.01.2024', '10:00', '10:10', '10:20');
        $e = new Veranstaltungsort('Testhalle', 'Duisburg', Country::GERMANY);
        $f = new AusschreibungImNetz('https://dcky.io');
        $g = new Veranstalter('dckyio');
        $h = new Ausrichter('dckyio', 'Mustermann, Max', 'muster@dcky.io', Country::GERMANY);
        $i = new Meldeadresse('Mustermann, Max', 'muster@dcky.io', Country::GERMANY);
        $j = new Meldeschluss('01.01.2024', '10:00');
        $k = new Besonderes('Das ist definitiv ein Test');

        $fb = new DSV6FileBuilder($a);
        $fb->addData($b, $c, $d, $e, $f, $g, $h, $i, $j, $k);

        printf($fb->build());


        self::assertNotNull('a');
    }
}
