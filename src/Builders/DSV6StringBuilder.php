<?php

namespace Duckystudios\DSV6Adapter\Builders;

class DSV6StringBuilder
{
    private string $string = '';

    /**
     * @param string $string The string that should be added to the string
     * @param bool $linebreak Should a linebreak be added after the string
     * @return DSV6StringBuilder Returns the current instance
     */
    public function add(string $string, bool $linebreak = true): DSV6StringBuilder
    {
        $this->string .= $string . (($linebreak) ? PHP_EOL : '');
        return $this;
    }

    /**
     * @return string Gibt den gebauten String zurück
     */
    public function build(): string
    {
        return $this->string;
    }
}