<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Country;

class Ausrichter extends Data
{
    var string $name;
    var string $ansprechpartnerName;
    var string $ansprechpartnerStrasse;
    var string $ansprechpartnerPlz;
    var string $ansprechpartnerOrt;
    var string $ansprechpartnerLand;
    var string $ansprechpartnerTelefon;
    var string $ansprechpartnerFax;
    var string $ansprechpartnerEmail;

    /**
     * @param string $name Name des Ausrichters
     * @param string $ansprechpartnerName Name, Vorname des Ansprechpartners
     * @param string $ansprechpartnerEmail E-Mail-Adresse des Ansprechpartners
     * @param Country $ansprechpartnerLand Land des Ansprechpartners
     * @param string $ansprechpartnerStrasse Straße des Ansprechpartners
     * @param string $ansprechpartnerPlz PLZ des Ansprechpartners
     * @param string $ansprechpartnerOrt Ort des Ansprechpartners
     * @param string $ansprechpartnerTelefon Telefonnummer des Ansprechpartners
     * @param string $ansprechpartnerFax Faxnummer des Ansprechpartners
     */
    public function __construct(string $name, string $ansprechpartnerName, string $ansprechpartnerEmail, Country $ansprechpartnerLand, string $ansprechpartnerStrasse = '', string $ansprechpartnerPlz = '', string $ansprechpartnerOrt = '', string $ansprechpartnerTelefon = '', string $ansprechpartnerFax = '')
    {
        $this->name = $name;
        $this->ansprechpartnerName = $ansprechpartnerName;
        $this->ansprechpartnerStrasse = $ansprechpartnerStrasse;
        $this->ansprechpartnerPlz = $ansprechpartnerPlz;
        $this->ansprechpartnerOrt = $ansprechpartnerOrt;
        $this->ansprechpartnerLand = $ansprechpartnerLand->get();
        $this->ansprechpartnerTelefon = $ansprechpartnerTelefon;
        $this->ansprechpartnerFax = $ansprechpartnerFax;
        $this->ansprechpartnerEmail = $ansprechpartnerEmail;
    }

    public function getPrefix(): string
    {
        return 'AUSRICHTER';
    }
}