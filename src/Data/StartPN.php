<?php

namespace Duckystudios\DSV6Adapter\Data;

class StartPN extends Data
{
    var string $schwimmerId = '';
    var string $wettkampfNummer = '';
    var string $meldezeit = '';

    /**
     * @param string $schwimmerId Identifikationsnummer des Schwimmers
     * @param string $wettkampfNummer Identifikationsnummer des Wettkampfes
     * @param string $meldezeit Meldezeit im Format HH:MM:SS,SS
     */
    public function __construct(string $schwimmerId, string $wettkampfNummer, string $meldezeit = '')
    {
        $this->schwimmerId = $schwimmerId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->meldezeit = $meldezeit;
    }

    public function getPrefix(): string
    {
        return 'STARTPN';
    }
}