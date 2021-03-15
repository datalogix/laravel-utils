# Laravel Utils

[![Latest Stable Version](https://poser.pugx.org/datalogix/laravel-utils/version)](https://packagist.org/packages/datalogix/laravel-utils)
[![Total Downloads](https://poser.pugx.org/datalogix/laravel-utils/downloads)](https://packagist.org/packages/datalogix/laravel-utils)
[![tests](https://github.com/datalogix/laravel-utils/workflows/tests/badge.svg)](https://github.com/datalogix/laravel-utils/actions)
[![StyleCI](https://github.styleci.io/repos/304879300/shield?style=flat)](https://github.styleci.io/repos/304879300)
[![codecov](https://codecov.io/gh/datalogix/laravel-utils/branch/main/graph/badge.svg)](https://codecov.io/gh/datalogix/laravel-utils)
[![License](https://poser.pugx.org/datalogix/laravel-utils/license)](https://packagist.org/packages/datalogix/laravel-utils)

> Laravel Utils is a package that configure simple things, which we usually forget about in our projects.

## Features

- Translations to `pt_BR`
- Model unguarded `disabled`
- Set locale `LC_ALL` when updated
- Set default string length for schema to `150`
- Middleware to force https on `production environment`
- Set default view for paginator to `tailwind`

## Installation

You can install the package via composer:

```bash
composer require datalogix/laravel-utils
```

The package will automatically register itself.

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
    'model' => [
        'unguard' => false,
    ],

    'locale' => [
        'category' => LC_ALL,
    ],

    'schema' => [
        'defaultStringLength' => 150,
    ],

    'middleware' => [
        'forceHttps' => app()->environment('production'),
    ],

    'paginator' => [
        'defaultView' => 'pagination::tailwind',
        'defaultSimpleView' => 'pagination::simple-tailwind',
    ],
];
```
