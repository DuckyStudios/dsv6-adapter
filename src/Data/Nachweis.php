<?php

namespace Duckystudios\DSV6Adapter\Data;

class Nachweis extends Data
{
    var string $nachweisVon = '';
    var string $nachweisBis = '';
    var string $bahnLaenge = '';

    /**
     * @param string $nachweisVon Datum, ab wann Zeiten für den Nachweis gelten
     * @param string $nachweisBis Datum, bis wann Zeiten für den Nachweis gelten
     * @param string $bahnLaenge Länge der Bahn. Zulässige Werte: 25, 50, FW (Freiwasser), AL (Alles)
     */
    public function __construct(string $nachweisVon, string $nachweisBis, string $bahnLaenge)
    {
        $this->nachweisVon = $nachweisVon;
        $this->nachweisBis = $nachweisBis;
        $this->bahnLaenge = $bahnLaenge;
    }


    public function getPrefix(): string
    {
        return 'NACHWEIS';
    }
}