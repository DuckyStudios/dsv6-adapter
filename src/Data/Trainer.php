<?php

namespace Duckystudios\DSV6Adapter\Data;

class Trainer extends Data
{
    var string $nummer = '';
    var string $name = '';

    /**
     * @param string $nummer Eindeutige nummerische Kennung des Trainers
     * @param string $name Nachname, Vorname des Trainers
     */
    public function __construct(string $nummer, string $name)
    {
        $this->nummer = $nummer;
        $this->name = $name;
    }

    public function getPrefix(): string
    {
        return 'TRAINER';
    }
}