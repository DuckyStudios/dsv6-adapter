<?php

namespace Duckystudios\DSV6Adapter\Data;

class Format extends Data
{
    var string $format = '';
    var string $version = '6';

    /**
     * @param string $format Format der Liste
     * @param string $version Versionsnummer des DSV-Standards
     */
    public function __construct(string $format, string $version = '6')
    {
        $this->format = $format;
        $this->version = $version;
    }

    public function getPrefix(): string
    {
        return 'FORMAT';
    }
}