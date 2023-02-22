<?php

namespace Duckystudios\DSV6Adapter\Data;

abstract class Data
{
    public abstract function getPrefix(): string;

    public function build(): string
    {
        $vars = get_object_vars($this);
        $prefix = $this->getPrefix();
        $result = '';

        foreach ($vars as $key => $value) {
            $result .= $value . ';';
        }

        return $prefix . ':' . $result;
    }
}