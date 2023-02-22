<?php

namespace Duckystudios\DSV6Adapter\Objects;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Wertungsklasse;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class Wertung
{
    private int $wettkampfNummer;
    private string $wettkampfTyp;
    private int $wertungsId;
    private int $wertungsklasseTyp;
    private int $minimumAlterOderJahr;
    private int $maximumAlterOderJahr;
    private string $geschlecht;
    private string $name;

    public function __construct(int $wettkampfNummer, Wettkampfart $wettkampfTyp, int $wertungsId, Wertungsklasse $wertungsklasseTyp, int $minimumAlterOderJahr = null, int $maximumAlterOderJahr = null, Geschlecht $geschlecht, string $name)
    {
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->getChar();
        $this->wertungsId = $wertungsId;
        $this->wertungsklasseTyp = $wertungsklasseTyp->getChar();
        $this->minimumAlterOderJahr = $minimumAlterOderJahr;
        $this->maximumAlterOderJahr = $maximumAlterOderJahr;
        $this->geschlecht = $geschlecht->getString();
        $this->name = $name;
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
     * @return int
     */
    public function getWertungsId(): int
    {
        return $this->wertungsId;
    }

    /**
     * @return int
     */
    public function getWertungsklasseTyp(): int
    {
        return $this->wertungsklasseTyp;
    }

    /**
     * @return int|null
     */
    public function getMinimumAlterOderJahr(): int|null
    {
        return $this->minimumAlterOderJahr;
    }

    /**
     * @return int|null
     */
    public function getMaximumAlterOderJahr(): int|null
    {
        return $this->maximumAlterOderJahr;
    }

    /**
     * @return string
     */
    public function getGeschlecht(): string
    {
        return $this->geschlecht;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}