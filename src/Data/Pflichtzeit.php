<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\WertungsklasseTyp;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class Pflichtzeit extends Data
{
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $wertungsklasse = '';
    var string $minimumAlterOderJahr = '';
    var string $maximumAlterOderJahr = '';
    var string $pflichtzeit = '';
    var string $geschlecht = 'M';

    /**
     * @param int $wettkampfNummer Nummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Wettkampfart
     * @param WertungsklasseTyp $wertungsklasse Wertungsklasse
     * @param int $minimumAlterOderJahr Kleinster Jahrgang/größte Altersklasse (für offene Klasse hier 0 angeben)
     * @param int $maximumAlterOderJahr Größter Jahrgang/kleinste Altersklasse (für "und jünger" hier 0 angeben)
     * @param string $pflichtzeit Pflichtzeit in HH:MM:SS
     */
    public function __construct(int $wettkampfNummer, Wettkampfart $wettkampfTyp, WertungsklasseTyp $wertungsklasse, int $minimumAlterOderJahr, int $maximumAlterOderJahr, string $pflichtzeit)
    {
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->wertungsklasse = $wertungsklasse->get();
        $this->minimumAlterOderJahr = strval($minimumAlterOderJahr);
        $this->maximumAlterOderJahr = strval($maximumAlterOderJahr);
        $this->pflichtzeit = $pflichtzeit;
    }

    public function getPrefix(): string
    {
        return 'PFLICHTZEIT';
    }
}