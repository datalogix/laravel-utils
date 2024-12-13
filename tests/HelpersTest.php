<?php

namespace Datalogix\Utils\Tests;

class HelpersTest extends TestCase
{
    public function test_states_br()
    {
        $this->assertIsArray(statesBR());
        $this->assertArrayHasKey('SP', statesBR());
    }
}
