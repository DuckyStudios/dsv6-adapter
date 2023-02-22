<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class StaffelErgebnis extends Data
{
    var string $schwimmerId = '';
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $wertungsId = '';
    var string $platz = '';
    var string $zeit = '';
    var string $grundDerNichtwertung = '';
    var string $startnummerDesDisqualifiziertenSchwimmers = '';
    var string $disqualifikationsBemerkung = '';
    var string $nachtraeglichesMeldegeld = '';

    /**
     * @param string $schwimmerId Identifikation des Schwimmers
     * @param string $wettkampfNummer Wettkampfnummer
     * @param Wettkampfart $wettkampfTyp Wettkampfart
     * @param string $wertungsId Identifikation der Wertung
     * @param string $platz Platzierung der Staffel
     * @param string $zeit Zeit im Format HH:MM:SS,SS
     * @param string $grundDerNichtwertung Bemerkung zur Nichtwertung
     * @param string $startnummerDesDisqualifiziertenSchwimmers Startnummer des disqualifizierten Schwimmers
     * @param string $disqualifikationsbemerkung Bemerkung zur Disqualifikation
     * @param string $nachtraeglichesMeldegeld E = Norm erreicht, F = ENM fällig, N = Norm nicht erreicht, aber nachgewiesen
     */
    public function __construct(string $schwimmerId, string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $wertungsId, string $platz, string $zeit, string $grundDerNichtwertung = '', string $startnummerDesDisqualifiziertenSchwimmers = '', string $disqualifikationsbemerkung = '', string $nachtraeglichesMeldegeld = '')
    {
        $this->schwimmerId = $schwimmerId;
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->wertungsId = $wertungsId;
        $this->platz = $platz;
        $this->zeit = $zeit;
        $this->grundDerNichtwertung = $grundDerNichtwertung;
        $this->startnummerDesDisqualifiziertenSchwimmers = $startnummerDesDisqualifiziertenSchwimmers;
        $this->disqualifikationsBemerkung = $disqualifikationsbemerkung;
        $this->nachtraeglichesMeldegeld = $nachtraeglichesMeldegeld;
    }


    public function getPrefix(): string
    {
        return 'STAFFELERGEBNIS';
    }
}