<?php

namespace Duckystudios\DSV6Adapter\Enums;

enum Country
{
    case GERMANY;
    case NETHERLANDS;
    case BELGIUM;
    case FRANCE;
    case SWITZERLAND;
    case AUSTRIA;
    case ITALY;
    case SPAIN;
    case PORTUGAL;

    public function getFINAString(): string
    {
        return match ($this) {
            Country::GERMANY => 'GER',
            Country::NETHERLANDS => 'NED',
            Country::BELGIUM => 'BEL',
            Country::FRANCE => 'FRA',
            Country::SWITZERLAND => 'SUI',
            Country::AUSTRIA => 'AUT',
            Country::ITALY => 'ITA',
            Country::SPAIN => 'ESP',
            Country::PORTUGAL => 'POR',
        };
    }
}
