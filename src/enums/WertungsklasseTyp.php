<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum WertungsklasseTyp
{
    case JAHRGANG;
    case ALTERSKLASSE;

    public function get(): string
    {
        return match ($this) {
            self::JAHRGANG => 'JG',
            self::ALTERSKLASSE => 'AK',
        };
    }
}
