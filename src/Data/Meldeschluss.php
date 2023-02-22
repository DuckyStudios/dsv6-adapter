<?php

namespace Duckystudios\DSV6Adapter\Data;

class Meldeschluss extends Data
{
    var string $datum = '';
    var string $zeit = '';

    /**
     * @param string $datum Datum im Format DD.MM.YYYY
     * @param string $zeit Zeit im Format HH:MM
     */
    public function __construct(string $datum, string $zeit)
    {
        $this->datum = $datum;
        $this->zeit = $zeit;
    }


    public function getPrefix(): string
    {
        return 'MELDESCHLUSS';
    }
}