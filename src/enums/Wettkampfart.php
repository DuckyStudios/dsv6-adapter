<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Wettkampfart
{
    case VORLAUF;
    case FINALE;
    case ENTSCHEIDUNG;
    case ZWISCHENLAUF;

    public function getChar(): string
    {
        return match ($this) {
            Wettkampfart::VORLAUF => 'V',
            Wettkampfart::FINALE => 'F',
            Wettkampfart::ENTSCHEIDUNG => 'E',
            Wettkampfart::ZWISCHENLAUF => 'Z',
        };
    }
}
