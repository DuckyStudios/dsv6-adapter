<?php

namespace Duckystudios\DSV6Adapter\Data;

class StartST extends Data
{
    var string $staffelId = '';
    var string $wettkampfNummer = '';
    var string $meldezeit = '';

    /**
     * @param string $staffelId Identifikationsnummer der Staffel
     * @param string $wettkampfNummer Identifikationsnummer des Wettkampfes
     * @param string $meldezeit Meldezeit im Format HH:MM:SS,SS
     */
    public function __construct(string $staffelId, string $wettkampfNummer, string $meldezeit = '')
    {
        $this->staffelId = $staffelId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->meldezeit = $meldezeit;
    }

    public function getPrefix(): string
    {
        return 'STARTST';
    }
}