<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\KariEinsatzwunsch;

class Kampfgericht extends Data
{
    var string $abschnittNummer = '';
    var string $position = '';
    var string $name = '';
    var string $verein = '';

    /**
     * @param string $abschnittNummer Nummer des Abschnitts
     * @param KariEinsatzwunsch $position Position des Kampfgerichts
     * @param string $name Name des Kampfgerichts (Nachname, Vorname)
     * @param string $verein Name des Vereins des Kampfgerichts, der diesen gestellt hat
     */
    public function __construct(string $abschnittNummer, KariEinsatzwunsch $position, string $name, string $verein)
    {
        $this->abschnittNummer = $abschnittNummer;
        $this->position = $position->get();
        $this->name = $name;
        $this->verein = $verein;
    }

    public function getPrefix(): string
    {
        return 'KAMPFGERICHT';
    }
}