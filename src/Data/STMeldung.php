<?php

namespace Duckystudios\DSV6Adapter\Data;

class STMeldung extends Data
{
    var string $nummer = '';
    var string $id = '';
    var string $wertungsklasse = '';
    var string $minimumAlterOderJahr = '';
    var string $maximumAlterOderJahr = '';
    var string $name = '';

    /**
     * @param string $nummer Nummer der Mannschaft z.B. 1 für 1. Mannschaft usw.
     * @param string $id Eindeutige ID der Mannschaft
     * @param string $wertungsklasse Wertungsklasse der Mannschaft
     * @param string $minimumAlterOderJahr Mindestalter oder Mindestjahr der Mannschaft (für die offenen Klassen wird hier 0 angegeben)
     * @param string $maximumAlterOderJahr Höchstalter oder Höchstjahr der Mannschaft (0 für "und jünger")
     * @param string $name Name der Mannschaft
     */
    public function __construct(string $nummer, string $id, string $wertungsklasse, string $minimumAlterOderJahr, string $maximumAlterOderJahr, string $name)
    {
        $this->nummer = $nummer;
        $this->id = $id;
        $this->wertungsklasse = $wertungsklasse;
        $this->minimumAlterOderJahr = $minimumAlterOderJahr;
        $this->maximumAlterOderJahr = $maximumAlterOderJahr;
        $this->name = $name;
    }


    public function getPrefix(): string
    {
        return 'STMELDUNG';
    }
}