<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\WertungsklasseTyp;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class Wertung extends Data
{
    var string $nummer = '';
    var string $typ = '';
    var string $wertungsId = '';
    var string $wertungsklasseTyp = '';
    var string $minimumAlterOderJahr = '';
    var string $maximumAlterOderJahr = '';
    var string $geschlecht = '';
    var string $name = '';

    /**
     * @param string $wettkampfNummer Nummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Typ des Wettkampfes
     * @param string $wertungsId ID der Wertung
     * @param WertungsklasseTyp $wertungsklasseTyp Typ der Wertungsklasse
     * @param int $minimumAlterOderJahr Kleinster Jahrgang/größte Altersklasse (für offene Klasse hier 0 angeben)
     * @param int $maximumAlterOderJahr Größter Jahrgang/kleinste Altersklasse (für "und jünger" hier 0 angeben)
     * @param Geschlecht $geschlecht Geschlecht der Teilnehmer
     * @param string $name Textliche Bezeichnung der Wertung
     */
    public function __construct(string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $wertungsId, WertungsklasseTyp $wertungsklasseTyp, int $minimumAlterOderJahr, int $maximumAlterOderJahr, Geschlecht $geschlecht, string $name)
    {
        $this->nummer = $wettkampfNummer;
        $this->typ = $wettkampfTyp->get();
        $this->wertungsId = $wertungsId;
        $this->wertungsklasseTyp = $wertungsklasseTyp->get();
        $this->minimumAlterOderJahr = strval($minimumAlterOderJahr);
        $this->maximumAlterOderJahr = strval($maximumAlterOderJahr);
        $this->geschlecht = $geschlecht->get();
        $this->name = $name;
    }


    public function getPrefix(): string
    {
        return 'WERTUNG';
    }
}