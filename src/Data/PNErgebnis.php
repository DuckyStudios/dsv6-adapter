<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;

class PNErgebnis extends Data
{
    var string $wettkampfNummer = '';
    var string $wettkampfTyp = '';
    var string $wertungsId = '';
    var string $platz = '';
    var string $grundDerNichtwertung = '';
    var string $name = '';
    var string $dsvId = '';
    var string $schwimmerId = '';
    var string $geschlecht = '';
    var string $jahrgang = '';
    var string $altersklasse = '';
    var string $verein = '';
    var string $vereinsKennzahl = '';
    var string $endzeit = '';
    var string $disqualifikationsbemerkung = '';
    var string $erhoetesMeldegeld = '';

    /**
     * @param string $wettkampfNummer Identifikationsnummer des Wettkampfes
     * @param Wettkampfart $wettkampfTyp Art des Wettkampfes
     * @param string $wertungsId Identifikationsnummer der Wertung
     * @param string $platz Platzierung
     * @param string $name Nachname, Vorname des Schwimmers
     * @param string $dsvId DSV-Nummer des Schwimmers
     * @param string $schwimmerId Identifikationsnummer des Schwimmers
     * @param Geschlecht $geschlecht Geschlecht des Schwimmers
     * @param string $jahrgang Jahrgang des Schwimmers
     * @param string $verein Name des Vereins
     * @param string $vereinsKennzahl Vereinskennzahl des Vereins
     * @param string $endzeit Endzeit im Format HH:MM:SS,SS
     * @param string $disqualifikationsbemerkung Bemerkung zur Disqualifikation
     * @param string $grundDerNichtwertung Grund der Nichtwertung
     * @param string $erhoetesMeldegeld E = Norm erreicht, F = ENM fällig, N = Norm nicht erreicht, aber nachgewiesen
     */
    public function __construct(string $wettkampfNummer, Wettkampfart $wettkampfTyp, string $wertungsId, string $platz, string $name, string $dsvId, string $schwimmerId, Geschlecht $geschlecht, string $jahrgang, string $verein, string $vereinsKennzahl, string $endzeit, string $disqualifikationsbemerkung = '', string $grundDerNichtwertung = '', string $erhoetesMeldegeld = '')
    {
        $this->wettkampfNummer = $wettkampfNummer;
        $this->wettkampfTyp = $wettkampfTyp->get();
        $this->wertungsId = $wertungsId;
        $this->platz = $platz;
        $this->grundDerNichtwertung = $grundDerNichtwertung;
        $this->name = $name;
        $this->dsvId = $dsvId;
        $this->schwimmerId = $schwimmerId;
        $this->geschlecht = $geschlecht->get();
        $this->jahrgang = $jahrgang;
        $this->verein = $verein;
        $this->vereinsKennzahl = $vereinsKennzahl;
        $this->endzeit = $endzeit;
        $this->disqualifikationsbemerkung = $disqualifikationsbemerkung;
        $this->erhoetesMeldegeld = $erhoetesMeldegeld;
    }


    public function getPrefix(): string
    {
        return 'PNERGEBNIS';
    }
}