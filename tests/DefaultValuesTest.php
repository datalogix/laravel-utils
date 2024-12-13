<?php

namespace Datalogix\Utils\Tests;

use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;

class DefaultValuesTest extends TestCase
{
    public function test_model_unguarded()
    {
        $this->assertFalse(Model::isUnguarded());
    }

    public function test_model_strict()
    {
        if (method_exists(Model::class, 'shouldBeStrict')) {
            $this->assertTrue(Model::preventsLazyLoading());
        }
    }

    public function test_events_locale_updated()
    {
        Event::fake();

        $this->app->setLocale('en');

        Event::assertDispatched('Illuminate\Foundation\Events\LocaleUpdated');
    }

    public function test_schema_default_string_length()
    {
        $this->assertEquals(150, Builder::$defaultStringLength);
    }

    public function test_https_is_disabled_on_development_mode()
    {
        $kernel = $this->app->make(Kernel::class);
        $this->assertFalse($kernel->hasMiddleware(HttpsProtocolMiddleware::class));
        $this->assertEquals('http://localhost', Url::to('/'));
    }

    public function test_paginator_default_view()
    {
        $this->assertEquals('pagination::tailwind', Paginator::$defaultView);
        $this->assertEquals('pagination::simple-tailwind', Paginator::$defaultSimpleView);
    }
}
