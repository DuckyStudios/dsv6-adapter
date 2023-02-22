<?php

namespace Duckystudios\DSV6Adapter\Data;

class AusschreibungImNetz extends Data
{
    var string $url = '';

    /**
     * @param string $url Gültige Internetadresse unter der die Ausschreibung abrufbar ist
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }


    public function getPrefix(): string
    {
        return 'AUSSCHREIBUNGIMNETZ';
    }
}