<?php

namespace Duckystudios\DSV6Adapter\Data;

class Person extends Data
{
    var string $name = '';
    var string $dsvId = '';
    var string $veranstaltungsId = '';
    var string $geschlecht = '';


    public function getPrefix(): string
    {
        return 'PERSON';
    }
}