<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Technik
{
    case RUECKEN;
    case BRUST;
    case FREISTIL;
    case SCHMETTERLING;
    case LAGEN;
    case BELIEBIGE_SONDERFORM;

    public function get(): string
    {
        return match ($this) {
            self::RUECKEN => 'R',
            self::BRUST => 'B',
            self::FREISTIL => 'F',
            self::SCHMETTERLING => 'S',
            self::LAGEN => 'L',
            self::BELIEBIGE_SONDERFORM => 'X',
        };
    }
}
