<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\MeldegeldTyp;

class Meldegeld extends Data
{
    var string $typ = '';
    var string $betrag = '';
    var string $wettkampfNummer = '';

    /**
     * @param MeldegeldTyp $typ Typ des Meldegeldes
     * @param string $betrag Betrag im Format "123,45"
     * @param string $wettkampfNummer Nummer des Wettkampfes, für den das Meldegeld gilt. Pflichtfeld bei Meldegeldtyp "Wettkampfmeldegeld"
     */
    public function __construct(MeldegeldTyp $typ, string $betrag, string $wettkampfNummer = '')
    {
        $this->typ = $typ->get();
        $this->betrag = $betrag;
        $this->wettkampfNummer = $wettkampfNummer;
    }


    public function getPrefix(): string
    {
        return 'MELDEGELD';
    }
}