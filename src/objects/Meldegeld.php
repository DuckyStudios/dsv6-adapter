<?php

namespace Duckystudios\DSV6Adapter\Objects;

use Duckystudios\DSV6Adapter\Enums\Meldegeldtyp;

class Meldegeld
{
    private string $typ;
    private string $betrag;
    private int $wettkampfNummer;

    public function __construct(Meldegeldtyp $typ, string $betrag, int $wettkampfNummer = null)
    {
        $this->typ = $typ->getChar();
        $this->betrag = $betrag;
        $this->wettkampfNummer = $wettkampfNummer;
    }

    /**
     * @return string
     */
    public function getTyp(): string
    {
        return $this->typ;
    }

    /**
     * @return string
     */
    public function getBetrag(): string
    {
        return $this->betrag;
    }

    /**
     * @return int|null
     */
    public function getWettkampfNummer(): int|null
    {
        return $this->wettkampfNummer;
    }
}