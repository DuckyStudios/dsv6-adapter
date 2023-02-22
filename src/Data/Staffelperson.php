<?php

namespace Duckystudios\DSV6Adapter\Data;

class Staffelperson extends Data
{
    var string $staffelId = '';
    var string $wettkampfNummer = '';
    var string $schwimmerId = '';
    var string $startNummer = '';

    /**
     * @param string $staffelId Eindeutige ID der Staffel
     * @param string $wettkampfNummer Nummer des Wettkampfes
     * @param string $schwimmerId Eindeutige ID des Schwimmers
     * @param string $startNummer Startnummer des Schwimmers innerhalb der Staffel
     */
    public function __construct(string $staffelId, string $wettkampfNummer, string $schwimmerId, string $startNummer)
    {
        $this->staffelId = $staffelId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->schwimmerId = $schwimmerId;
        $this->startNummer = $startNummer;
    }

    public function getPrefix(): string
    {
        return 'STAFFELPERSON';
    }
}