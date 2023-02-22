<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Meldegeldtyp
{
    case MELDEGELDPAUSCHALE;
    case EINZELMELDEGELD;
    case STAFFELMELDEGELD;
    case WETTKAMPFMELDEGELD;
    case MANNSCHAFTMELDEGELD;

    public function getChar(): string
    {
        return match ($this) {
            Meldegeldtyp::MELDEGELDPAUSCHALE => 'Meldegeldpauschale',
            Meldegeldtyp::EINZELMELDEGELD => 'Einzelmeldegeld',
            Meldegeldtyp::STAFFELMELDEGELD => 'Staffelmeldegeld',
            Meldegeldtyp::WETTKAMPFMELDEGELD => 'Wkmeldegeld',
            Meldegeldtyp::MANNSCHAFTMELDEGELD => 'Mannschaftmeldegeld',
        };
    }
}
