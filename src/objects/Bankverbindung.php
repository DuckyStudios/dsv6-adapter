<?php

namespace Duckystudios\DSV6Adapter\Objects;

class Bankverbindung
{
    private string $name;
    private string $iban;
    private string $bic;

    public function __construct(string $name, string $iban, string $bic)
    {
        $this->name = $name;
        $this->iban = $iban;
        $this->bic = $bic;
    }

    public function getIBAN(): string
    {
        return $this->iban;
    }

    public function getBIC(): string
    {
        return $this->bic;
    }

    public function getBankName(): string
    {
        return $this->name;
    }
}