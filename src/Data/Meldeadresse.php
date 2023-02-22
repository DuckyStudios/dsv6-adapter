<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Country;

class Meldeadresse extends Data
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
     * @param string $name Name, Vorname der Meldeadresse
     * @param string $email E-Mai Adresse der Meldeadresse
     * @param Country $land Land der Meldeadresse
     * @param string $strasse Straße der Meldeadresse
     * @param string $plz Postleitzahl der Meldeadresse
     * @param string $ort Ort der Meldeadresse
     * @param string $telefon Telefonnummer der Meldeadresse
     * @param string $fax Faxnummer der Meldeadresse
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
        return 'MELDEADRESSE';
    }
}