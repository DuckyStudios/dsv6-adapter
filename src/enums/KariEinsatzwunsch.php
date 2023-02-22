<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum KariEinsatzwunsch
{
    case SCHIEDSRICHTER;
    case STARTER;
    case ZIELRICHTEROBMANN;
    case ZIELRICHTER;
    case ZEITNEHMEROBMANN;
    case ZEITNEHMER;
    case RESERVEZEITNEHMER;
    case SCHWIMMRICHTER;
    case WENDERICHTEROBMANN;
    case WENDERICHTER;
    case AUSWERTER;
    case SPRECHER;
    case PROTOKOLLANT;

    public function get(): string
    {
        return match ($this) {
            self::SCHIEDSRICHTER => 'SCH',
            self::STARTER => 'STA',
            self::ZIELRICHTEROBMANN => 'ZRO',
            self::ZIELRICHTER => 'ZR',
            self::ZEITNEHMEROBMANN => 'ZNO',
            self::ZEITNEHMER => 'ZN',
            self::RESERVEZEITNEHMER => 'RZN',
            self::SCHWIMMRICHTER => 'SR',
            self::WENDERICHTEROBMANN => 'WRO',
            self::WENDERICHTER => 'WR',
            self::AUSWERTER => 'AUS',
            self::SPRECHER => 'SP',
            self::PROTOKOLLANT => 'PKF',
        };
    }
}
