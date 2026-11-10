<?php

use Datalogix\Utils\Tests\TestCase;

uses(TestCase::class);

test('helpers file is loadable multiple times', function () {
    require __DIR__.'/../src/helpers.php';

    expect(function_exists('statesBR'))->toBeTrue();
});

test('states br', function () {
    expect(statesBR())->toHaveKey('SP');
});
