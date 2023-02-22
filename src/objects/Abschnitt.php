<?php

namespace Duckystudios\DSV6Adapter\Objects;

class Abschnitt
{
    private int $nummer;
    private string $datum;
    private string $einlassZeit;
    private string $kampfRichterSitzungZeit;
    private string $beginnZeit;

    public function __construct(int $nummer, string $datum, string $einlassZeit, string $kampfRichterSitzungZeit, string $beginnZeit)
    {
        $this->nummer = $nummer;
        $this->datum = $datum;
        $this->einlassZeit = $einlassZeit;
        $this->kampfRichterSitzungZeit = $kampfRichterSitzungZeit;
        $this->beginnZeit = $beginnZeit;
    }

    /**
     * @return int
     */
    public function getNummer(): int
    {
        return $this->nummer;
    }

    /**
     * @return string
     */
    public function getDatum(): string
    {
        return $this->datum;
    }

    /**
     * @return string
     */
    public function getEinlassZeit(): string
    {
        return $this->einlassZeit;
    }

    /**
     * @return string
     */
    public function getKampfRichterSitzungZeit(): string
    {
        return $this->kampfRichterSitzungZeit;
    }

    /**
     * @return string
     */
    public function getBeginnZeit(): string
    {
        return $this->beginnZeit;
    }

}