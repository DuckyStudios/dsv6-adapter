<?php

namespace Duckystudios\DSV6Adapter\Lists;

use Duckystudios\DSV6Adapter\Builders\DSV6StringBuilder;
use Duckystudios\DSV6Adapter\Enums\Country;
use Duckystudios\DSV6Adapter\Enums\Zeitmessung;
use Duckystudios\DSV6Adapter\Objects\Abschnitt;
use Duckystudios\DSV6Adapter\Objects\Bankverbindung;
use Duckystudios\DSV6Adapter\Objects\Meldegeld;
use Duckystudios\DSV6Adapter\Objects\Person;
use Duckystudios\DSV6Adapter\Objects\Pflichtzeit;
use Duckystudios\DSV6Adapter\Objects\Wertung;
use Duckystudios\DSV6Adapter\Objects\Wettkampf;

class Wettkampfdefinitionsliste implements Liste
{
    private string $erzeugerSoftware;
    private string $erzeugerSoftwareVersion;
    private string $erzeugerSoftwareEmail;

    public function defineErzeugerSoftware(string $name, string $version, string $email): Wettkampfdefinitionsliste
    {
        $this->erzeugerSoftware = $name;
        $this->erzeugerSoftwareVersion = $version;
        $this->erzeugerSoftwareEmail = $email;
        return $this;
    }

    private string $veranstaltungName;
    private string $veranstaltungOrt;
    private int $veranstaltungBahnlaenge;
    private string $veranstaltungZeitmessung;

    public function defineVeranstaltung(string $name, string $ort, int $bahnLaenge, Zeitmessung $zeitmessung): Wettkampfdefinitionsliste
    {
        $this->veranstaltungName = $name;
        $this->veranstaltungOrt = $ort;
        $this->veranstaltungBahnlaenge = $bahnLaenge;
        $this->veranstaltungZeitmessung = $zeitmessung->getString();
        return $this;
    }

    private string $veranstaltungsortName;
    private string $veranstaltungsortStrasse;
    private int $veranstaltungsortPlz;
    private string $veranstaltungsortOrt;
    private string $veranstaltungsortLand;
    private string $veranstaltungsortTelefon;
    private string $veranstaltungsortFax;
    private string $veranstaltungsortEmail;

    public function defineVeranstaltungsort(string $name, string $strasse, int $postleitzahl, string $ort, Country $land, string $telefon, string $fax, string $email): Wettkampfdefinitionsliste
    {
        $this->veranstaltungsortName = $name;
        $this->veranstaltungsortStrasse = $strasse;
        $this->veranstaltungsortPlz = $postleitzahl;
        $this->veranstaltungsortOrt = $ort;
        $this->veranstaltungsortLand = $land->getFINAString();
        $this->veranstaltungsortTelefon = $telefon;
        $this->veranstaltungsortFax = $fax;
        $this->veranstaltungsortEmail = $email;
        return $this;
    }

    private string $ausschreibungInternet;

    public function defineAusschreibungImNetz(string $url): Wettkampfdefinitionsliste
    {
        $this->ausschreibungInternet = $url;
        return $this;
    }

    private string $veranstalterName;

    public function defineVeranstalter(string $name): Wettkampfdefinitionsliste
    {
        $this->veranstalterName = $name;
        return $this;
    }

    private string $ausrichterName;
    private string $ausrichterAnsprechpartner;
    private string $ausrichterStrasse;
    private int $ausrichterPlz;
    private string $ausrichterOrt;
    private string $ausrichterLand;
    private string $ausrichterTelefon;
    private string $ausrichterFax;
    private string $ausrichterEmail;

    public function defineAusrichter(string $name, Person $ansprechpartner, string $strasse, int $postleitzahl, string $ort, Country $land, string $telefon, string $fax, string $email): Wettkampfdefinitionsliste
    {
        $this->ausrichterName = $name;
        $this->ausrichterAnsprechpartner = $ansprechpartner->getFullName();
        $this->ausrichterStrasse = $strasse;
        $this->ausrichterPlz = $postleitzahl;
        $this->ausrichterOrt = $ort;
        $this->ausrichterLand = $land->getFINAString();
        $this->ausrichterTelefon = $telefon;
        $this->ausrichterFax = $fax;
        $this->ausrichterEmail = $email;
        return $this;
    }

    private string $meldeadresseName;
    private string $meldeadresseStrasse;
    private int $meldeadressePlz;
    private string $meldeadresseOrt;
    private string $meldeadresseLand;
    private string $meldeadresseTelefon;
    private string $meldeadresseFax;
    private string $meldeadresseEmail;

    public function defineMeldeadresse(string $name, string $strasse, int $postleitzahl, string $ort, Country $land, string $telefon, string $fax, string $email): Wettkampfdefinitionsliste
    {
        $this->meldeadresseName = $name;
        $this->meldeadresseStrasse = $strasse;
        $this->meldeadressePlz = $postleitzahl;
        $this->meldeadresseOrt = $ort;
        $this->meldeadresseLand = $land->getFINAString();
        $this->meldeadresseTelefon = $telefon;
        $this->meldeadresseFax = $fax;
        $this->meldeadresseEmail = $email;
        return $this;
    }

    private string $meldeschlussDatum;
    private string $meldeschlussZeit;

    public function defineMeldeschluss(string $datum, string $zeit): Wettkampfdefinitionsliste
    {
        $this->meldeschlussDatum = $datum;
        $this->meldeschlussZeit = $zeit;
        return $this;
    }

    private string $bankverbindungName;
    private string $bankverbindungIBAN;
    private string $bankverbindungBIC;

    public function defineBankverbindung(Bankverbindung $bankverbindung): Wettkampfdefinitionsliste
    {
        $this->bankverbindungName = $bankverbindung->getBankname();
        $this->bankverbindungIBAN = $bankverbindung->getIBAN();
        $this->bankverbindungBIC = $bankverbindung->getBIC();
        return $this;
    }

    private string $besonderes;

    public function defineBesonderes(string $anmerkung): Wettkampfdefinitionsliste
    {
        $this->besonderes = $anmerkung;
        return $this;
    }

    /**
     * @var Abschnitt[]
     */
    private array $abschnitte = [];

    public function defineAbschnitte(Abschnitt ...$abschnitte): Wettkampfdefinitionsliste
    {
        array_push($this->abschnitte, ...$abschnitte);
        return $this;
    }

    /**
     * @var Wettkampf[]
     */
    private array $wettkaempfe = [];

    public function defineWettkaempfe(Wettkampf ...$wettkaempfe): Wettkampfdefinitionsliste
    {
        array_push($this->wettkaempfe, ...$wettkaempfe);
        return $this;
    }

    /**
     * @var Wertung[]
     */
    private array $wertungen = [];

    public function defineWertungen(Wertung ...$wertungen): Wettkampfdefinitionsliste
    {
        array_push($this->wertungen, ...$wertungen);
        return $this;
    }

    /**
     * @var Pflichtzeit[]
     */
    private array $pflichtzeiten = [];

    public function definePflichtzeiten(Pflichtzeit ...$pflichtzeiten): Wettkampfdefinitionsliste
    {
        array_push($this->pflichtzeiten, ...$pflichtzeiten);
        return $this;
    }

    /**
     * @var Meldegeld[]
     */
    private array $meldegelder = [];

    public function defineMeldegelder(Meldegeld ...$meldegelder): Wettkampfdefinitionsliste
    {
        array_push($this->meldegelder, ...$meldegelder);
        return $this;
    }

    public function build(): string
    {
        $string = new DSV6StringBuilder();
        $string->add('FORMAT:Wettkampfdefinitionsliste;6;');
        if(isset($this->erzeugerSoftware) && isset($this->erzeugerSoftwareVersion) && isset($this->erzeugerSoftwareEmail)) {
            $string->add('ERZEUGER:' . $this->erzeugerSoftware . ';' . $this->erzeugerSoftwareVersion . ';' . $this->erzeugerSoftwareEmail . ';');
        }
        if(isset($this->veranstaltungName) && isset($this->veranstaltungOrt) && isset($this->veranstaltungBahnlaenge) && isset($this->veranstaltungZeitmessung)) {
            $string->add('VERANSTALTUNG:' . $this->veranstaltungName . ';' . $this->veranstaltungOrt . ';' . $this->veranstaltungBahnlaenge . ';' . $this->veranstaltungZeitmessung . ';');
        }
        if(isset($this->veranstaltungsortName) && isset($this->veranstaltungsortStrasse) && isset($this->veranstaltungsortPlz) && isset($this->veranstaltungsortOrt) && isset($this->veranstaltungsortLand) && isset($this->veranstaltungsortTelefon) && isset($this->veranstaltungsortFax) && isset($this->veranstaltungsortEmail)) {
            $string->add('VERANSTALTUNGSORT:' . $this->veranstaltungsortName . ';' . $this->veranstaltungsortStrasse . ';' . $this->veranstaltungsortPlz . ';' . $this->veranstaltungsortOrt . ';' . $this->veranstaltungsortLand . ';' . $this->veranstaltungsortTelefon . ';' . $this->veranstaltungsortFax . ';' . $this->veranstaltungsortEmail . ';');
        }
        if(isset($this->ausschreibungInternet)) {
            $string->add('AUSSCHREIBUNGIMNETZ:' . $this->ausschreibungInternet . ';');
        }
        if(isset($this->veranstalterName)) {
            $string->add('VERANSTALTER:' . $this->veranstalterName . ';');
        }
        if(isset($this->ausrichterName) && isset($this->ausrichterAnsprechpartner) && isset($this->ausrichterStrasse) && isset($this->ausrichterPlz) && isset($this->ausrichterOrt) && isset($this->ausrichterLand) && isset($this->ausrichterTelefon) && isset($this->ausrichterFax) && isset($this->ausrichterEmail)) {
            $string->add('AUSRICHTER:' . $this->ausrichterName . ';' . $this->ausrichterAnsprechpartner . ';' . $this->ausrichterStrasse . ';' . $this->ausrichterPlz . ';' . $this->ausrichterOrt . ';' . $this->ausrichterLand . ';' . $this->ausrichterTelefon . ';' . $this->ausrichterFax . ';' . $this->ausrichterEmail . ';');
        }
        if(isset($this->meldeadresseName) && isset($this->meldeadresseStrasse) && isset($this->meldeadressePlz) && isset($this->meldeadresseOrt) && isset($this->meldeadresseLand) && isset($this->meldeadresseTelefon) && isset($this->meldeadresseFax) && isset($this->meldeadresseEmail)) {
            $string->add('MELDEADRESSE:' . $this->meldeadresseName . ';' . $this->meldeadresseStrasse . ';' . $this->meldeadressePlz . ';' . $this->meldeadresseOrt . ';' . $this->meldeadresseLand . ';' . $this->meldeadresseTelefon . ';' . $this->meldeadresseFax . ';' . $this->meldeadresseEmail . ';');
        }
        if(isset($this->meldeschlussZeit) && isset($this->meldeschlussDatum)) {
            $string->add('MELDESCHLUSS:' . $this->meldeschlussDatum . ';' . $this->meldeschlussZeit . ';');
        }
        if(isset($this->bankVerbindungName)) {
            $string->add('BANKVERBINDUNG:' . $this->bankverbindungName . ';' . $this->bankverbindungIBAN . ';' . $this->bankverbindungBIC . ';');
        }
        if(isset($this->besonderes)) {
            $string->add('BESONDERES:' . $this->besonderes . ';');
        }

        if(isset($this->abschnitte)) {
            foreach ($this->abschnitte as $abschnitt) {
                $string->add('ABSCHNITT:' . $abschnitt->getNummer() . ';' . $abschnitt->getDatum() . ';' . $abschnitt->getEinlassZeit() . ';' . $abschnitt->getKampfRichterSitzungZeit() . ';' . $abschnitt->getBeginnZeit() . ';;');
            }
        }

        if(isset($this->wettkaempfe)) {
            foreach ($this->wettkaempfe as $wettkampf) {
                $string->add('WETTKAMPF:' . $wettkampf->getNummer() . ';' . $wettkampf->getType() . ';' . $wettkampf->getAbschnittNummer() . ';' . $wettkampf->getAnzahlStarter() . ';' . $wettkampf->getStrecke() . ';' . $wettkampf->getTechnik() . ';' . $wettkampf->getAusuebung() . ';' . $wettkampf->getGeschlecht() . ';' . $wettkampf->getZuordnungBestenliste() . ';' . $wettkampf->getQualifikationsWettkampfNummer() . ';' . $wettkampf->getQualifikationsWettkampfTyp() . ';');
            }
        }

        if(isset($this->wertungen)) {
            foreach ($this->wertungen as $wertung) {
                $string->add('WERTUNG:' . $wertung->getWettkampfNummer() . ';' . $wertung->getWertungsId() . ';' . $wertung->getWettkampfTyp() . ';' . $wertung->getMinimumAlterOderJahr() . ';' . $wertung->getMaximumAlterOderJahr() . ';' . $wertung->getGeschlecht() . ';' . $wertung->getName() . ';');
            }
        }

        if(isset($this->pflichtzeiten)) {
            foreach ($this->pflichtzeiten as $pflichtzeit) {
                $string->add('PFLICHTZEIT:' . $pflichtzeit->getWettkampfNummer() . ';' . $pflichtzeit->getWettkampfTyp() . ';' . $pflichtzeit->getMinimumAlterOderJahr() . ';' . $pflichtzeit->getMaximumAlterOderJahr() . ';' . $pflichtzeit->getPflichtzeit() . ';' . $pflichtzeit->getGeschlecht() . ';');
            }
        }

        if(isset($this->meldegelder)) {
            foreach ($this->meldegelder as $meldegeld) {
                $string->add('MELDEGELD:' . $meldegeld->getTyp() . ';' . $meldegeld->getBetrag() . ';' . $meldegeld->getWettkampfNummer() . ';');
            }
        }

        $string->add('DATEIENDE');

        return $string->build();
    }
}