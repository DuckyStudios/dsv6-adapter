<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class STAbloese extends Data
{
    var string $staffelId = '';
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $startnummerDesSchwimmersInnerhalbDerStaffel = '';
    var string $art = '';
    var string $reaktionszeit = '';

    /**
     * @param string $staffelId Identifikation der Staffel
     * @param string $wettkampfNummer Nummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Art des Wettkampfes
     * @param string $startnummerDesSchwimmersInnerhalbDerStaffel Startnummer des Schwimmers innerhalb der Staffel
     * @param string $art + für positive Zeit (Start nach dem Abschlag), - für negative Zeit (Start vor dem Abschlag)
     * @param string $reaktionszeit Reaktionszeit
     */
    public function __construct(string $staffelId, string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $startnummerDesSchwimmersInnerhalbDerStaffel, string $art, string $reaktionszeit)
    {
        $this->staffelId = $staffelId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->startnummerDesSchwimmersInnerhalbDerStaffel = $startnummerDesSchwimmersInnerhalbDerStaffel;
        $this->art = $art;
        $this->reaktionszeit = $reaktionszeit;
    }


    public function getPrefix(): string
    {
        return 'STABLOESE';
    }
}