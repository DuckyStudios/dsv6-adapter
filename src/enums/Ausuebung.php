<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Ausuebung
{
    case GANZE_LAGE;
    case BEINE;
    case ARME;
    case START;
    case WENDE;
    case GLEIT_UEBUNG;
    case BELIEBIGE_SONDERFORM;

    public function getChar(): string
    {
        return match ($this) {
            Ausuebung::GANZE_LAGE => 'GL',
            Ausuebung::BEINE => 'BE',
            Ausuebung::ARME => 'AR',
            Ausuebung::START => 'ST',
            Ausuebung::WENDE => 'WE',
            Ausuebung::GLEIT_UEBUNG => 'GB',
            Ausuebung::BELIEBIGE_SONDERFORM => 'X',
        };
    }
}
