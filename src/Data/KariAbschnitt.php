<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\KariEinsatzwunsch;

class KariAbschnitt extends Data
{
    var string $nummer = '';
    var string $abschnitt = '';
    var string $einsatzwunsch = '';

    /**
     * @param string $nummer Eindeutige nummerische Kennung des Kampfrichters
     * @param string $abschnitt Nummer des Abschnitts
     * @param KariEinsatzwunsch|null $einsatzwunsch Einsatzwunsch des Kampfrichters
     */
    public function __construct(string $nummer, string $abschnitt, KariEinsatzwunsch $einsatzwunsch = null)
    {
        $this->nummer = $nummer;
        $this->abschnitt = $abschnitt;
        if(isset($einsatzwunsch)) {
            $this->einsatzwunsch = $einsatzwunsch->get();
        }
    }


    public function getPrefix(): string
    {
        return 'KARIABSCHNITT';
    }
}