<?php

namespace Datalogix\Utils\Tests;

use Carbon\Carbon;
use Datalogix\Utils\Http\Middleware\HttpsProtocolMiddleware;
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class CustomValuesTest extends TestCase
{
    protected function getEnvironmentSetUp($app): void
    {
        $app->config->set('utils', [
            'model' => [
                'unguard' => true,
            ],

            'locale' => [
                'category' => LC_TIME,
            ],

            'schema' => [
                'defaultStringLength' => null,
            ],

            'https' => [
                'forceScheme' => true,
                'middleware' => true,
            ],

            'paginator' => [
                'defaultView' => 'paginator-defaultView',
                'defaultSimpleView' => 'paginator-defaultSimpleView',
            ],
        ]);
    }

    public function test_model_unguarded()
    {
        $this->assertTrue(Model::isUnguarded());
    }

    public function test_locale()
    {
        $this->app->setLocale('en');
        $this->assertEquals('en', Carbon::getLocale());
        $this->assertEquals('january', Str::lower(Carbon::parse('2020-01-01')->getTranslatedMonthName()));

        $this->app->setLocale('pt_BR');
        $this->assertEquals('pt_BR', Carbon::getLocale());
        $this->assertEquals('janeiro', Str::lower(Carbon::parse('2020-01-01')->getTranslatedMonthName()));
    }

    public function test_schema_default_string_length()
    {
        $this->assertEquals(255, Builder::$defaultStringLength);
    }

    public function test_https_enabled()
    {
        $kernel = $this->app->make(Kernel::class);
        $this->assertTrue($kernel->hasMiddleware(HttpsProtocolMiddleware::class));
        $this->assertEquals('https://localhost', Url::to('/'));
    }

    public function test_paginator_default_view()
    {
        $this->assertEquals('paginator-defaultView', Paginator::$defaultView);
        $this->assertEquals('paginator-defaultSimpleView', Paginator::$defaultSimpleView);
    }
}
