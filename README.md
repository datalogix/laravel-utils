# Laravel Utils

[![Latest Stable Version](https://poser.pugx.org/datalogix/laravel-utils/version)](https://packagist.org/packages/datalogix/laravel-utils)
[![Total Downloads](https://poser.pugx.org/datalogix/laravel-utils/downloads)](https://packagist.org/packages/datalogix/laravel-utils)
[![tests](https://github.com/datalogix/laravel-utils/workflows/tests/badge.svg)](https://github.com/datalogix/laravel-utils/actions)
[![codecov](https://codecov.io/gh/datalogix/laravel-utils/branch/main/graph/badge.svg)](https://codecov.io/gh/datalogix/laravel-utils)
[![License](https://poser.pugx.org/datalogix/laravel-utils/license)](https://packagist.org/packages/datalogix/laravel-utils)

> A Laravel package that provides a set of useful utilities and service providers to enhance your application.

## Installation

You can install the package via composer:

```bash
composer require datalogix/laravel-utils
```

The package will automatically register itself.

## ✅ Features

These features work out of the box—no additional configuration required:

- 🌍 **Multi-language Support**
  Includes Laravel's built-in translations (`auth`, `pagination`, `passwords`, `validation` and JSON strings) for English (`en`) and Brazilian Portuguese (`pt_BR`). Files are auto-loaded and can be published for customization. Translations for Respect Validation rules and error pages are provided by their own packages.

- ✔️ **Respect Validation Integration**
  Automatically integrates [Respect Validation](https://respect-validation.readthedocs.io) via [datalogix/laravel-validation](https://github.com/datalogix/laravel-validation), with zero setup required.

- 🧠 **Enhanced Query Builder**
  Adds useful, reusable macros to Laravel's query builder for cleaner and more expressive queries — powered by [datalogix/laravel-builder-macros](https://github.com/datalogix/laravel-builder-macros).

- 🧩 **Sensible Defaults for Laravel**
  Applies opinionated, production-ready defaults to improve performance, security, and testability — powered by [datalogix/laravel-sensible](https://github.com/datalogix/laravel-sensible).

- 🚨 **Custom Error Pages**
  Provides ready-to-use, customizable error pages for your application — powered by [datalogix/laravel-error-pages](https://github.com/datalogix/laravel-error-pages).

- 🛠️ **Console Support**
  Translation files can be published using Artisan when running in the console environment.

## Helpers

```php
statesBR(); // ['AC' => 'Acre', 'AL' => 'Alagoas', ..., 'TO' => 'Tocantins']
```

## Translations

To publish the language files, run:

```bash
php artisan vendor:publish --provider="Datalogix\Utils\UtilsServiceProvider" --tag="lang"
```

Translations shipped by the bundled packages are published through their own tags:

```bash
php artisan vendor:publish --tag="laravel-validation-lang"
php artisan vendor:publish --tag="error-pages-lang"
```
