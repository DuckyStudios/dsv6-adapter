<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class STZwischenzeit extends Data
{
    var string $schwimmerId = '';
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $startnummerDesSchwimmersInnerhalbDerStaffel = '';
    var string $distanz = '';
    var string $zeit = '';

    /**
     * @param string $schwimmerId Identifikationsnummer des Schwimmers
     * @param string $wettkampfNummer Identifikationsnummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Art des Wettkampfes
     * @param string $startnummerDesSchwimmersInnerhalbDerStaffel Startnummer des Schwimmers innerhalb der Staffel
     * @param string $distanz Distanz der Zwischenzeit in Metern
     * @param string $zeit Zeit im Format HH:MM:SS,SS
     */
    public function __construct(string $schwimmerId, string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $startnummerDesSchwimmersInnerhalbDerStaffel, string $distanz, string $zeit)
    {
        $this->schwimmerId = $schwimmerId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->startnummerDesSchwimmersInnerhalbDerStaffel = $startnummerDesSchwimmersInnerhalbDerStaffel;
        $this->distanz = $distanz;
        $this->zeit = $zeit;
    }


    public function getPrefix(): string
    {
        return 'STZWISCHENZEIT';
    }
}