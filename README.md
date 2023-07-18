# Laravel Utils

[![Latest Stable Version](https://poser.pugx.org/datalogix/laravel-utils/version)](https://packagist.org/packages/datalogix/laravel-utils)
[![Total Downloads](https://poser.pugx.org/datalogix/laravel-utils/downloads)](https://packagist.org/packages/datalogix/laravel-utils)
[![tests](https://github.com/datalogix/laravel-utils/workflows/tests/badge.svg)](https://github.com/datalogix/laravel-utils/actions)
[![StyleCI](https://github.styleci.io/repos/304879300/shield?style=flat)](https://github.styleci.io/repos/304879300)
[![codecov](https://codecov.io/gh/datalogix/laravel-utils/branch/main/graph/badge.svg)](https://codecov.io/gh/datalogix/laravel-utils)
[![License](https://poser.pugx.org/datalogix/laravel-utils/license)](https://packagist.org/packages/datalogix/laravel-utils)

> Laravel Utils is a package that configure simple things, which we usually forget about in our projects.

## Features

- Translations `EN` and `pt_BR`
- Model unguarded `disabled`
- Set locale `LC_ALL` when updated
- Set default string length for schema to `150`
- Middleware to force https on `production environment`
- Set default view for paginator to `tailwind`
- Register translations automatically using [datalogix/laravel-translation](https://github.com/datalogix/laravel-translation).
- Inject [Respect Validation](https://respect-validation.readthedocs.io) using [datalogix/laravel-validation](https://github.com/datalogix/laravel-validation).

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

/*
|--------------------------------------------------------------------------
| Laravel Utils
|--------------------------------------------------------------------------
*/

return [
    'model' => [
        'unguard' => env('UTILS_MODEL_UNGUARD', false),
    ],

    'locale' => [
        'category' => env('UTILS_LOCALE_CATEGORY', LC_ALL),
    ],

    'schema' => [
        'defaultStringLength' => env('UTILS_SCHEMA_STRING_LENGTH', 150),
    ],

    'https' => [
        'forceScheme' => env('UTILS_HTTPS_FORCE_SCHEME', app()->environment('production')),
        'middleware' => env('UTILS_HTTPS_MIDDLEWARE', app()->environment('production')),
    ],

    'paginator' => [
        'defaultView' => env('UTILS_PAGINATOR_VIEW', 'pagination::tailwind'),
        'defaultSimpleView' => env('UTILS_PAGINATOR_SIMPLE_VIEW', 'pagination::simple-tailwind'),
    ],
];
```
