<?php

namespace Duckystudios\DSV6Adapter\Data;

class Erzeuger extends Data
{
    var string $softwareName = '';
    var string $softwareVersion = '';
    var string $softwareEmail = '';

    /**
     * @param string $softwareName Name der Software, die die Datei erstellt hat
     * @param string $softwareVersion Version der Software
     * @param string $softwareEmail E-Mail-Adresse des Software-Herstellers
     */
    public function __construct(string $softwareName, string $softwareVersion, string $softwareEmail)
    {
        $this->softwareName = $softwareName;
        $this->softwareVersion = $softwareVersion;
        $this->softwareEmail = $softwareEmail;
    }


    public function getPrefix(): string
    {
        return 'ERZEUGER';
    }
}