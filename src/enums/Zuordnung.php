<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Zuordnung
{
    case SCHWIMMEN_DES_MASTERS;
    case FREIWASSERSCHWIMMEN;
    case REINER_KINDERGERECHTER_WETTKAMPF;
    case SCHULE_UNIVERSITAET_ORGANISATIONEN;
    case SCHWIMMEN_FUER_JUGEND_UND_OFFENE_KLASSE;
    case DEFAULT_OR_UNKNOWN;

    public function getChar(): string
    {
        return match ($this) {
            self::SCHWIMMEN_DES_MASTERS => 'MS',
            self::FREIWASSERSCHWIMMEN => 'FS',
            self::REINER_KINDERGERECHTER_WETTKAMPF => 'KG',
            self::SCHULE_UNIVERSITAET_ORGANISATIONEN => 'XX',
            default => 'SW',
        };
    }

}
