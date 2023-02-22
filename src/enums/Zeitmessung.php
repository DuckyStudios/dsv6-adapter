<?php

namespace Duckystudios\DSV6Adapter\enums;

enum Zeitmessung
{
    case HANDZEIT;
    case AUTOMATISCH;
    case HALB_AUTOMATISCH;

    public function getString(): string
    {
        return match ($this) {
            Zeitmessung::HANDZEIT => 'HANDZEIT',
            Zeitmessung::AUTOMATISCH => 'AUTOMATISCH',
            Zeitmessung::HALB_AUTOMATISCH => 'HALBAUTOMATISCH',
        };
    }
}
