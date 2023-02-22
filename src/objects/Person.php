<?php

namespace Duckystudios\DSV6Adapter\Objects;

class Person
{
    private string $vorname;
    private string $nachname;

    public function __construct(string $vorname, string $nachname)
    {
        $this->vorname = $vorname;
        $this->nachname = $nachname;
    }

    public function getFullName(): string
    {
        return $this->nachname . ', ' . $this->vorname;
    }

    public function getVorname(): string
    {
        return $this->vorname;
    }

    public function getNachname(): string
    {
        return $this->nachname;
    }
}