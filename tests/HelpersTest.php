<?php

namespace Datalogix\Utils\Tests;

class HelpersTest extends TestCase
{
    public function test_helpers_file_is_loadable_multiple_times()
    {
        require __DIR__.'/../src/helpers.php';

        $this->assertTrue(function_exists('statesBR'));
    }

    public function test_states_br()
    {
        $this->assertIsArray(statesBR());
        $this->assertArrayHasKey('SP', statesBR());
    }
}
