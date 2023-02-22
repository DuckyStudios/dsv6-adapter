<?php

namespace Duckystudios\DSV6Adapter\Data;

class Veranstalter extends Data
{
    var string $name = '';

    /**
     * @param string $name Name des Veranstalters
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getPrefix(): string
    {
        return 'VERANSTALTER';
    }
}