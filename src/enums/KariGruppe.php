<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum KariGruppe
{
    case WETTKAMPFRICHTER;
    case AUSWERTER;
    case SCHIEDSRICHTER;
    case SPRECHER;

    public function get(): string
    {
        return match ($this) {
            self::WETTKAMPFRICHTER => 'WKR',
            self::AUSWERTER => 'AUS',
            self::SCHIEDSRICHTER => 'SCH',
            self::SPRECHER => 'SPR',
        };
    }
}
