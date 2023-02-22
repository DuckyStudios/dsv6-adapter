<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;

class PNMeldung extends Data
{
    var string $name = '';
    var string $dsvId = '';
    var string $id = '';
    var string $geschlecht = '';
    var string $jahrgang = '';
    var string $altersklasse = '';
    var string $trainerNummer = '';

    /**
     * @param string $name Nachname, Vorname des Teilnehmers
     * @param string $dsvId 6-stellige DSV-Nummer des Teilnehmers, falls diese unbekannt ist, muss die 0 eingegeben werden
     * @param string $id Eindeutige Nummer des Teilnehmers, die vom Veranstalter vergeben wird
     * @param Geschlecht $geschlecht Geschlecht des Teilnehmers
     * @param string $jahrgang Geburtsjahr des Teilnehmers
     * @param string $trainerNummer Nummer des Trainers, der den Teilnehmer betreut
     */
    public function __construct(string $name, string $dsvId, string $id, Geschlecht $geschlecht, string $jahrgang, string $trainerNummer)
    {
        $this->name = $name;
        $this->dsvId = $dsvId;
        $this->id = $id;
        $this->geschlecht = $geschlecht->get();
        $this->jahrgang = $jahrgang;
        $this->trainerNummer = $trainerNummer;
    }


    public function getPrefix(): string
    {
        return 'PNMELDUNG';
    }
}