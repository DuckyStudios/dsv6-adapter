<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Country;

class Verein extends Data
{
    var string $name;
    var string $vereinskennzahl;
    var string $schwimmverband;
    var string $land;

    /**
     * @param string $name Name des Vereins
     * @param string $vereinskennzahl Kennzahl des Vereins
     * @param string $schwimmverband Schwimmverband des Vereins
     * @param Country $land Land des Vereins
     */
    public function __construct(string $name, string $vereinskennzahl, string $schwimmverband, Country $land)
    {
        $this->name = $name;
        $this->vereinskennzahl = $vereinskennzahl;
        $this->schwimmverband = $schwimmverband;
        $this->land = $land->get();
    }


    public function getPrefix(): string
    {
        return 'VEREIN';
    }
}