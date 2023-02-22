<?php

namespace Duckystudios\DSV6Adapter\Objects;

use Duckystudios\DSV6Adapter\Enums\Ausuebung;
use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Technik;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;
use Duckystudios\DSV6Adapter\Enums\Zuordnung;

class Wettkampf
{
    private int $nummer;
    private string $type;
    private int $abschnittNummer;
    private int $anzahlStarter;
    private int $strecke;
    private string $technik;
    private string $ausuebung;
    private string $geschlecht;
    private string $zuordnungBestenliste;
    private int $qualifikationsWettkampfNummer;
    private string $qualifikationsWettkampfTyp;

    public function __construct(int $nummer, Wettkampfart $type, int $abschnittNummer, int $anzahlStarter, int $strecke, Technik $technik, Ausuebung $ausuebung, Geschlecht $geschlecht, Zuordnung $zuordnungBestenliste, int $qualifikationsWettkampfNummer = -1, Wettkampfart $qualifikationsWettkampfTyp = null)
    {
        $this->nummer = $nummer;
        $this->type = $type->getChar();
        $this->abschnittNummer = $abschnittNummer;
        $this->anzahlStarter = $anzahlStarter;
        $this->strecke = $strecke;
        $this->technik = $technik->getChar();
        $this->ausuebung = $ausuebung->getChar();
        $this->geschlecht = $geschlecht->getString();
        $this->zuordnungBestenliste = $zuordnungBestenliste->getChar();

        if ($qualifikationsWettkampfNummer !== -1) {
            $this->qualifikationsWettkampfNummer = $qualifikationsWettkampfNummer;
            $this->qualifikationsWettkampfTyp = $qualifikationsWettkampfTyp->getChar();
        }
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getAbschnittNummer(): int
    {
        return $this->abschnittNummer;
    }

    /**
     * @return int
     */
    public function getAnzahlStarter(): int
    {
        return $this->anzahlStarter;
    }

    /**
     * @return int
     */
    public function getStrecke(): int
    {
        return $this->strecke;
    }

    /**
     * @return string
     */
    public function getTechnik(): string
    {
        return $this->technik;
    }

    /**
     * @return string
     */
    public function getAusuebung(): string
    {
        return $this->ausuebung;
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
    public function getZuordnungBestenliste(): string
    {
        return $this->zuordnungBestenliste;
    }

    /**
     * @return int|null
     */
    public function getQualifikationsWettkampfNummer(): int|null
    {
        if (!isset($this->qualifikationsWettkampfNummer)) {
           return null;
        }

        return $this->qualifikationsWettkampfNummer;
    }

    /**
     * @return string|null
     */
    public function getQualifikationsWettkampfTyp(): string|null
    {
        if (!isset($this->qualifikationsWettkampfTyp)) {
            return null;
        }

        return $this->qualifikationsWettkampfTyp;
    }
}