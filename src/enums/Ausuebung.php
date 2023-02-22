<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Ausuebung
{
    case GANZE_LAGE;
    case BEINE;
    case ARME;
    case START;
    case WENDE;
    case GLEITUEBUNG;
    case BELIEBIGE_SONDERFORM;

    public function get(): string
    {
        return match ($this) {
            self::GANZE_LAGE => 'GL',
            self::BEINE => 'BE',
            self::ARME => 'AR',
            self::START => 'ST',
            self::WENDE => 'WE',
            self::GLEITUEBUNG => 'GB',
            self::BELIEBIGE_SONDERFORM => 'X',
        };
    }
}
