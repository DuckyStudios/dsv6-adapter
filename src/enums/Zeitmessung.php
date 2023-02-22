<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Zeitmessung
{
    case HANDZEIT;
    case AUTOMATISCH;
    case HALB_AUTOMATISCH;

    public function get(): string
    {
        return match ($this) {
            self::HANDZEIT => 'HANDZEIT',
            self::AUTOMATISCH => 'AUTOMATISCH',
            self::HALB_AUTOMATISCH => 'HALBAUTOMATISCH',
        };
    }
}
