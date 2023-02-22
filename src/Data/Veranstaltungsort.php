<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Country;

class Veranstaltungsort extends Data
{
    var string $schwimmhalleName = '';
    var string $schwimmhalleStrasse = '';
    var string $schwimmhallePlz = '';
    var string $schwimmhalleOrt = '';
    var string $schwimmhalleLand = '';
    var string $schwimmhalleTelefon = '';
    var string $schwimmhalleFax = '';
    var string $schwimmhalleEmail = '';

    /**
     * @param string $schwimmhalleName Bezeichnung der Schwimmhalle
     * @param string $schwimmhalleStrasse Straße der Schwimmhalle
     * @param string $schwimmhallePlz Postleitzahl der Schwimmhalle
     * @param string $schwimmhalleOrt Ort der Schwimmhalle
     * @param Country $schwimmhalleLand Land der Schwimmhalle
     * @param string $schwimmhalleTelefon Telefonnummer der Schwimmhalle
     * @param string $schwimmhalleFax Faxnummer der Schwimmhalle
     * @param string $schwimmhalleEmail E-Mail-Adresse der Schwimmhalle
     */
    public function __construct(string $schwimmhalleName, string $schwimmhalleOrt, Country $schwimmhalleLand, string $schwimmhalleTelefon = '', string $schwimmhalleFax = '', string $schwimmhalleStrasse = '', string $schwimmhallePlz = '', string $schwimmhalleEmail = '')
    {
        $this->schwimmhalleName = $schwimmhalleName;
        $this->schwimmhalleStrasse = $schwimmhalleStrasse;
        $this->schwimmhallePlz = $schwimmhallePlz;
        $this->schwimmhalleOrt = $schwimmhalleOrt;
        $this->schwimmhalleLand = $schwimmhalleLand->get();
        $this->schwimmhalleTelefon = $schwimmhalleTelefon;
        $this->schwimmhalleFax = $schwimmhalleFax;
        $this->schwimmhalleEmail = $schwimmhalleEmail;
    }


    public function getPrefix(): string
    {
        return 'VERANSTALTUNGSORT';
    }
}