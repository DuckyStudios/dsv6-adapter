<?php

namespace Duckystudios\DSV6Adapter\Tests\Lists;

use Duckystudios\DSV6Adapter\Tests\DSV6ListMocker;
use PHPUnit\Framework\TestCase;

class WettkampfdefinitionslisteTest extends TestCase
{
    public function testBuild() {
        $mocker = new DSV6ListMocker();
        $result = $mocker->mockWettkampfdefinitionsliste()->build();

        print_r($result);
        self::assertNotNull($result);
    }
}
