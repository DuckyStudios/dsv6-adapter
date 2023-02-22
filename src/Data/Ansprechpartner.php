<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Country;

class Ansprechpartner extends Data
{
    var string $name = '';
    var string $strasse = '';
    var string $plz = '';
    var string $ort = '';
    var string $land = '';
    var string $telefon = '';
    var string $fax = '';
    var string $email = '';

    /**
     * @param string $name Nachname, Vorname des Ansprechpartners
     * @param string $strasse Straße der meldenden Person
     * @param string $plz Postleitzahl der meldenden Person
     * @param string $ort Ort der meldenden Person
     * @param Country $land Land der meldenden Person
     * @param string $telefon Telefonnummer der meldenden Person
     * @param string $fax Faxnummer der meldenden Person
     * @param string $email E-Mail-Adresse der meldenden Person
     */
    public function __construct(string $name, string $email, Country $land, string $strasse = '', string $plz = '', string $ort = '', string $telefon = '', string $fax = '')
    {
        $this->name = $name;
        $this->strasse = $strasse;
        $this->plz = $plz;
        $this->ort = $ort;
        $this->land = $land->get();
        $this->telefon = $telefon;
        $this->fax = $fax;
        $this->email = $email;
    }


    public function getPrefix(): string
    {
        return 'ANSPRECHPARTNER';
    }
}