<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\KariGruppe;

class KariMeldung extends Data
{
    var string $nummer = '';
    var string $name = '';
    var string $gruppe = '';

    /**
     * @param string $nummer Eindeutige nummerische Kennung des Kampfrichters
     * @param string $name Name des Kampfrichters
     * @param KariGruppe $gruppe Gruppe der KariMeldung
     */
    public function __construct(string $nummer, string $name, KariGruppe $gruppe)
    {
        $this->nummer = $nummer;
        $this->name = $name;
        $this->gruppe = $gruppe->get();
    }


    public function getPrefix(): string
    {
        return 'KARIMELDUNG';
    }
}