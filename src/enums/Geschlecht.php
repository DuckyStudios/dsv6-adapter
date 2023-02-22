<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Geschlecht
{
    case MAENNLICH;
    case WEIBLICH;
    case MIXED;

    public function getString(): string
    {
        return match ($this) {
            self::MAENNLICH => 'M',
            self::WEIBLICH => 'W',
            self::MIXED => 'X',
        };
    }
}
