<?php

namespace Duckystudios\DSV6Adapter\Data;

class Abschnitt extends Data
{
    var string $abschnittNummer = '';
    var string $abschnittDatum = '';
    var string $abschnittEinlassZeit = '';
    var string $abschnittKampfrichterZeit = '';
    var string $abschnittStartZeit = '';
    var string $abschnittZeitRelativ = 'N';

    /**
     * @param int $abschnittNummer Nummer des Abschnitts, maximal 2 Stellen
     * @param string $abschnittDatum Datum des Abschnitts im Format DD.MM.YYYY
     * @param string $abschnittEinlassZeit Einlasszeit des Abschnitts im Format HH:MM
     * @param string $abschnittKampfrichterZeit Kampfrichterzeit des Abschnitts im Format HH:MM
     * @param string $abschnittStartZeit Startzeit des Abschnitts im Format HH:MM
     */
    public function __construct(int $abschnittNummer, string $abschnittDatum, string $abschnittEinlassZeit, string $abschnittKampfrichterZeit, string $abschnittStartZeit)
    {
        $this->abschnittNummer = strval($abschnittNummer);
        $this->abschnittDatum = $abschnittDatum;
        $this->abschnittEinlassZeit = $abschnittEinlassZeit;
        $this->abschnittKampfrichterZeit = $abschnittKampfrichterZeit;
        $this->abschnittStartZeit = $abschnittStartZeit;
    }


    public function getPrefix(): string
    {
        return 'ABSCHNITT';
    }
}