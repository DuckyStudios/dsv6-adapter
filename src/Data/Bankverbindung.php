<?php

namespace Duckystudios\DSV6Adapter\Data;

class Bankverbindung extends Data
{
    var string $bankname = '';
    var string $iban = '';
    var string $bic = '';

    public function __construct(string $iban, string $bic, string $bankname = '')
    {
        $this->bankname = $bankname;
        $this->iban = $iban;
        $this->bic = $bic;
    }

    public function getPrefix(): string
    {
        return 'BANKVERBINDUNG';
    }
}