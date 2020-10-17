# Laravel Utils

[![Latest Stable Version](https://poser.pugx.org/datalogix/laravel-utils/version)](https://packagist.org/packages/datalogix/laravel-utils)
[![Total Downloads](https://poser.pugx.org/datalogix/laravel-utils/downloads)](https://packagist.org/packages/datalogix/laravel-utils)
[![tests](https://github.com/datalogix/laravel-utils/workflows/tests/badge.svg)](https://github.com/datalogix/laravel-utils/actions)
[![StyleCI](https://styleci.io/repos/40018123/shield?style=flat)](https://styleci.io/repos/40018123)
[![codecov](https://codecov.io/gh/datalogix/laravel-utils/branch/master/graph/badge.svg)](https://codecov.io/gh/datalogix/laravel-utils)
[![License](https://poser.pugx.org/datalogix/laravel-utils/license)](https://packagist.org/packages/datalogix/laravel-utils)

> Laravel Utils is a package that configure simple things, which we usually forget about in our projects.

## Features

- Translations (pt_BR)
- Set locale (LC_ALL, Carbon, App)
- Set default string length for schema
- Middleware to force https
- Set default view for paginator

## Installation

Run the following command from you terminal:

```bash
composer require datalogix/laravel-utils
```

or add this to require section in your composer.json file:

```bash
"datalogix/laravel-utils": "~1.0"
```

then run ```composer update```

## Translations

To publish Portuguese translations (pt_BR), use the command below:

```bash
php artisan vendor:publish --provider="Datalogix\Utils\UtilsServiceProvider" --tag="lang"
```

## Configuration

The defaults are set in `config/utils.php`. Copy this file to your own config directory to modify the values. You can publish the config using this command:

```bash
php artisan vendor:publish --provider="Datalogix\Utils\UtilsServiceProvider" --tag="config"
```

This is the contents of the published file:

```php
return [
    /*
     |--------------------------------------------------------------------------
     | Laravel Utils
     |--------------------------------------------------------------------------
     */

    'locale' => config('app.locale', 'pt_BR'),

    'schema' => [
        'defaultStringLength' => 150,
    ],

    'middleware' => [
        'forceHttps' => app()->environment('production'),
    ],

    'paginator' => [
        'defaultView' => 'pagination::tailwind',
    ],
];
```
