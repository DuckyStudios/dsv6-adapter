<?php

namespace Duckystudios\DSV6Adapter\Builders;

use Duckystudios\DSV6Adapter\Data\Data;
use Duckystudios\DSV6Adapter\Data\Format;

class DSV6FileBuilder
{
    public static string $FILE_END = 'DATEIENDE';

    /**
     * @param Format $format Das Format-Objekt
     */
    public function __construct(Format $format)
    {
        $this->fileContent = $format->build() . PHP_EOL;
    }

    /**
     * @param Data ...$data Die Daten, die hinzugefügt werden sollen
     * @return $this Gibt die aktuelle Instanz zurück
     */
    public function addData(Data ...$data): DSV6FileBuilder
    {
        foreach ($data as $row) {
            $this->fileContent .= $row->build() . PHP_EOL;
        }
        return $this;
    }

    /**
     * @return string Gibt den Inhalt der Datei zurück
     */
    public function build(): string
    {
        return $this->fileContent . DSV6FileBuilder::$FILE_END;
    }
}