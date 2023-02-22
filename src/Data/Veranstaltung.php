<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Zeitmessung;

class Veranstaltung extends Data
{
    var string $veranstaltungBezeichnung = '';
    var string $veranstaltungOrt = '';
    var string $veranstaltungBahnLaenge = '';
    var string $veranstaltungZeitmessung = '';

    /**
     * @param string $veranstaltungBezeichnung Name der Veranstaltung
     * @param string $veranstaltungOrt Veranstaltungsort
     * @param string $veranstaltungBahnLaenge Falls die Bahnlänge nicht 16 2/3, 20, 25, 33 1/3, 50 Meter oder FW (Freiwasser) beträgt, ist hier X anzugeben. Sowie für 16 2/3 hier 16 anzugeben und für 33 1/3 hier eine 33 anzugeben ist.
     * @param Zeitmessung $veranstaltungZeitmessung Type of timekeeping
     */
    public function __construct(string $veranstaltungBezeichnung, string $veranstaltungOrt, string $veranstaltungBahnLaenge, Zeitmessung $veranstaltungZeitmessung)
    {
        $this->veranstaltungBezeichnung = $veranstaltungBezeichnung;
        $this->veranstaltungOrt = $veranstaltungOrt;
        $this->veranstaltungBahnLaenge = $veranstaltungBahnLaenge;
        $this->veranstaltungZeitmessung = $veranstaltungZeitmessung->get();
    }


    public function getPrefix(): string
    {
        return 'VERANSTALTUNG';
    }
}