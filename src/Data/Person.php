<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Geschlecht;

class Person extends Data
{
    var string $name = '';
    var string $dsvId = '';
    var string $id = '';
    var string $geschlecht = '';
    var string $jahrgang = '';
    var string $altersklasse = '';

    /**
     * @param string $name Nachname, Vorname des Teilnehmers
     * @param string $dsvId DSV-Nummer des Teilnehmers, wenn keine DSV-Nummer vorhanden, dann 0
     * @param string $id Eindeutige Nummer, welche zur Identifikation des Teilnehmers verwendet wird
     * @param Geschlecht $geschlecht Geschlecht des Teilnehmers
     * @param string $jahrgang Geburtsjahr des Teilnehmers
     */
    public function __construct(string $name, string $dsvId, string $id, Geschlecht $geschlecht, string $jahrgang)
    {
        $this->name = $name;
        $this->dsvId = $dsvId;
        $this->id = $id;
        $this->geschlecht = $geschlecht->get();
        $this->jahrgang = $jahrgang;
    }


    public function getPrefix(): string
    {
        return 'PERSON';
    }
}