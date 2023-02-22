<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class STErgebnis extends Data
{
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $wertungsId = '';
    var string $platz = '';
    var string $grundDerNichtwertung = '';
    var string $startnummer = '';
    var string $staffelId = '';
    var string $verein = '';
    var string $vereinKennzahl = '';
    var string $zeit = '';
    var string $startnummerDesDisqualifiziertenInnerhalbDerStaffel = '';
    var string $disqualifikationsBemerkung = '';
    var string $erhoetesMeldegeld = '';

    /**
     * @param string $wettkampfNummer Identifikationsnummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Wettkampfart
     * @param string $wertungsId Identifikationsnummer der Wertung
     * @param string $platz Platzierung
     * @param string $startnummer Nummer der Staffel
     * @param string $staffelId Identifikationsnummer der Staffel
     * @param string $verein Vereinsname
     * @param string $vereinKennzahl Vereinskennzahl vom DSV
     * @param string $zeit Zeit im Format HH:MM:SS,SS
     * @param string $startnummerDesDisqualifiziertenInnerhalbDerStaffel Startnummer des Disqualifizierten innerhalb der Staffel
     * @param string $disqualifikationsBemerkung Bemerking zur Disqualifikation
     * @param string $grundDerNichtwertung Grund der Nichtwertung
     * @param string $erhoetesMeldegeld E = Norm erreicht, F = ENM fällig, N = Norm nicht erreicht, aber nachgewiesen
     */
    public function __construct(string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $wertungsId, string $platz, string $startnummer, string $staffelId, string $verein, string $vereinKennzahl, string $zeit, string $startnummerDesDisqualifiziertenInnerhalbDerStaffel, string $disqualifikationsBemerkung, string $grundDerNichtwertung, string $erhoetesMeldegeld)
    {
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->wertungsId = $wertungsId;
        $this->platz = $platz;
        $this->grundDerNichtwertung = $grundDerNichtwertung;
        $this->startnummer = $startnummer;
        $this->staffelId = $staffelId;
        $this->verein = $verein;
        $this->vereinKennzahl = $vereinKennzahl;
        $this->zeit = $zeit;
        $this->startnummerDesDisqualifiziertenInnerhalbDerStaffel = $startnummerDesDisqualifiziertenInnerhalbDerStaffel;
        $this->disqualifikationsBemerkung = $disqualifikationsBemerkung;
        $this->erhoetesMeldegeld = $erhoetesMeldegeld;
    }


    public function getPrefix(): string
    {
        return 'STERGEBNIS';
    }
}