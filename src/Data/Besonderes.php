<?php

namespace Duckystudios\DSV6Adapter\Data;

class Besonderes extends Data
{
    var string $anmerkung = '';

    /**
     * @param string $anmerkung Für Bestimmungen, die nicht durch die restlichen Felder abgedeckt werden können.
     */
    public function __construct(string $anmerkung)
    {
        $this->anmerkung = $anmerkung;
    }


    public function getPrefix(): string
    {
        return 'BESONDERES';
    }
}