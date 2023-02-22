<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Wettkampfart
{
    case VORLAUF;
    case ZWISCHENLAUF;
    case FINALE;
    case ENTSCHEIDUNG;
    case AUSSCHWIMMEN;
    case NACHSCHWIMMEN;

    public function get(): string
    {
        return match ($this) {
            self::VORLAUF => 'V',
            self::ZWISCHENLAUF => 'Z',
            self::FINALE => 'F',
            self::ENTSCHEIDUNG => 'E',
            self::AUSSCHWIMMEN => 'A',
            self::NACHSCHWIMMEN => 'N',
        };
    }
}
