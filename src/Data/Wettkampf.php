<?php

namespace Duckystudios\DSV6Adapter\Data;

use Duckystudios\DSV6Adapter\Enums\Ausuebung;
use Duckystudios\DSV6Adapter\Enums\Geschlecht;
use Duckystudios\DSV6Adapter\Enums\Technik;
use Duckystudios\DSV6Adapter\Enums\Wettkampfart;
use Duckystudios\DSV6Adapter\Enums\ZuordnungBestenliste;

class Wettkampf extends Data
{
    var string $nummer = '';
    var string $art = '';
    var string $abschnittNummer = '';
    var string $anzahlStarter = '';
    var string $einzelstrecke = '';
    var string $technik = '';
    var string $ausuebung = '';
    var string $geschlecht = '';
    var string $zuordnungBestenliste = '';
    var string $qualifikationWettkampfNummer = '';
    var string $qualifikationWettkampfArt = '';

    /**
     * @param string $nummer Nummer des Wettkampfes, maximal 3 Stellen
     * @param Wettkampfart $art Art des Wettkampfes
     * @param string $abschnittNummer Nummer des Abschnitts
     * @param string $einzelstrecke Strecke in Metern, zwischen 1 und 25000 sowie 0 (für sonstige Strecken)
     * @param Technik $technik Technik des Wettkampfes
     * @param Ausuebung $ausuebung Ausübung des Wettkampfes
     * @param Geschlecht $geschlecht Geschlecht der Teilnehmer
     * @param ZuordnungBestenliste $zuordnungBestenliste Zuordnung des Wettkampfes zur Bestenliste
     * @param string $qualifikationWettkampfNummer Nummer des Wettkampfes, von dem die Teilnehmer qualifiziert sind
     * @param Wettkampfart|null $qualifikationWettkampfArt Art des Wettkampfes, von dem die Teilnehmer qualifiziert sind
     * @param string $anzahlStarter Anzahl der Teilnehmer
     */
    public function __construct(string $nummer, Wettkampfart $art, string $abschnittNummer, string $einzelstrecke, Technik $technik, Ausuebung $ausuebung, Geschlecht $geschlecht, ZuordnungBestenliste $zuordnungBestenliste, string $qualifikationWettkampfNummer = '', Wettkampfart $qualifikationWettkampfArt = null, string $anzahlStarter = '')
    {
        $this->nummer = $nummer;
        $this->art = $art->get();
        $this->abschnittNummer = $abschnittNummer;
        $this->anzahlStarter = $anzahlStarter;
        $this->einzelstrecke = $einzelstrecke;
        $this->technik = $technik->get();
        $this->ausuebung = $ausuebung->get();
        $this->geschlecht = $geschlecht->get();
        $this->zuordnungBestenliste = $zuordnungBestenliste->get();
        $this->qualifikationWettkampfNummer = $qualifikationWettkampfNummer;
        if(isset($qualifikationWettkampfArt)) {
            $this->qualifikationWettkampfArt = $qualifikationWettkampfArt->get();
        }
    }


    public function getPrefix(): string
    {
        return 'WETTKAMPF';
    }
}