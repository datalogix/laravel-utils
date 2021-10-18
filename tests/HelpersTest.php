<?php

namespace Datalogix\Utils\Tests;

class HelpersTest extends TestCase
{
    public function testStatesBR()
    {
        $this->assertIsArray(statesBR());
        $this->assertArrayHasKey('SP', statesBR());
    }
}
