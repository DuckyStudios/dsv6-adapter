<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum ZuordnungBestenliste
{
    case STANDARD_ODER_UNBEKANNT;
    case SCHWIMMEN_DES_MASTERS;
    case FREIWASSERSCHWIMMEN;
    case REINER_KINDERGERECHTER_WETTKAMPF;
    case SCHULE_UNIVERSITAET_ORGANISATION;

    public function get(): string
    {
        return match ($this) {
            self::SCHULE_UNIVERSITAET_ORGANISATION => 'XX',
            self::FREIWASSERSCHWIMMEN => 'FS',
            self::SCHWIMMEN_DES_MASTERS => 'MS',
            self::REINER_KINDERGERECHTER_WETTKAMPF => 'KG',
            default => 'SW',
        };
    }
}
