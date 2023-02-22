<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Technik
{
    case FREISTIL;
    case RUECKEN;
    case BRUST;
    case SCHMETTERLING;
    case LAGEN;
    case BELIEBIGE_SONDERFORM;

    public function getChar(): string
    {
        return match ($this) {
            Technik::FREISTIL => 'F',
            Technik::RUECKEN => 'R',
            Technik::BRUST => 'B',
            Technik::SCHMETTERLING => 'S',
            Technik::LAGEN => 'L',
            Technik::BELIEBIGE_SONDERFORM => 'X',
        };
    }
}
