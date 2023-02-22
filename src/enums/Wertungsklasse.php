<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Wertungsklasse
{
    case JAHRGANG;
    case ALTERSKLASSE;

    public function getChar(): string
    {
        return match ($this) {
            Wertungsklasse::JAHRGANG => 'JG',
            Wertungsklasse::ALTERSKLASSE => 'AK',
        };
    }
}
