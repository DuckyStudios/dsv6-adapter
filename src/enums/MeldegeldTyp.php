<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum MeldegeldTyp
{
    case MELDEGELDPAUSCHALE;
    case EINZELMELDEGELD;
    case STAFFELMELDEGELD;
    case WETTKAMPFMELDEGELD;
    case MANNSCHAFTMELDEGELD;

    public function get(): string
    {
        return match ($this) {
            self::MELDEGELDPAUSCHALE => 'Meldegeldpauschale',
            self::EINZELMELDEGELD => 'Einzelmeldegeld',
            self::STAFFELMELDEGELD => 'Staffelmeldegeld',
            self::WETTKAMPFMELDEGELD => 'Wkmeldegeld',
            self::MANNSCHAFTMELDEGELD => 'Mannschaftmeldegeld',
        };
    }
}
