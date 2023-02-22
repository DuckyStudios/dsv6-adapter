<?php

namespace Duckystudios\DSV6Adapter\Objects;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Wertungsklasse;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class Pflichtzeit
{
    private int $wettkampfNummer;
    private string $wettkampfTyp;
    private string $wertungsklasse;
    private int $minimumAlterOderJahr;
    private int $maximumAlterOderJahr;
    private string $pflichtzeit;
    private string $geschlecht;

    public function __construct(int $wettkampfNummer, Wettkampfart $wettkampfTyp, Wertungsklasse $wertungsklasse, int $minimumAlterOderJahr, int $maximumAlterOderJahr, string $pflichtzeit, Geschlecht $geschlecht)
    {
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->getChar();
        $this->wertungsklasse = $wertungsklasse->getChar();
        $this->minimumAlterOderJahr = $minimumAlterOderJahr;
        $this->maximumAlterOderJahr = $maximumAlterOderJahr;
        $this->pflichtzeit = $pflichtzeit;
        $this->geschlecht = $geschlecht->getString();
    }

    /**
     * @return int
     */
    public function getWettkampfNummer(): int
    {
        return $this->wettkampfNummer;
    }

    /**
     * @return string
     */
    public function getWettkampfTyp(): string
    {
        return $this->wettkampfTyp;
    }

    /**
     * @return string
     */
    public function getWertungsklasse(): string
    {
        return $this->wertungsklasse;
    }

    /**
     * @return int
     */
    public function getMinimumAlterOderJahr(): int
    {
        return $this->minimumAlterOderJahr;
    }

    /**
     * @return int
     */
    public function getMaximumAlterOderJahr(): int
    {
        return $this->maximumAlterOderJahr;
    }

    /**
     * @return string
     */
    public function getPflichtzeit(): string
    {
        return $this->pflichtzeit;
    }

    /**
     * @return string
     */
    public function getGeschlecht(): string
    {
        return $this->geschlecht;
    }
}