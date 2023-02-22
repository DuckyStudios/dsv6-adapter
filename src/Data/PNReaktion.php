<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class PNReaktion extends Data
{
    var string $schwimmerId = '';
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $art = '';
    var string $zeit = '';

    /**
     * @param string $schwimmerId Identifikation des Schwimmers
     * @param string $wettkampfNummer Identifikation des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Wettkampfart
     * @param string $zeit Reaktionszeit im Format 00:00.00,00
     * @param string $art + für positive Zeit (Start nach dem Startschuss), - für negative Zeit (Start vor dem Startschuss)
     */
    public function __construct(string $schwimmerId, string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $zeit, string $art = '+')
    {
        $this->schwimmerId = $schwimmerId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->art = $art;
        $this->zeit = $zeit;
    }


    public function getPrefix(): string
    {
        return 'PNREAKTION';
    }
}