# Laravel Utils

[![Latest Stable Version](https://poser.pugx.org/datalogix/laravel-utils/version)](https://packagist.org/packages/datalogix/laravel-utils)
[![Total Downloads](https://poser.pugx.org/datalogix/laravel-utils/downloads)](https://packagist.org/packages/datalogix/laravel-utils)
[![ci](https://img.shields.io/github/actions/workflow/status/datalogix/laravel-utils/datalogix.yml?branch=main&label=ci)](https://github.com/datalogix/laravel-utils/actions/workflows/datalogix.yml)
[![codecov](https://codecov.io/gh/datalogix/laravel-utils/branch/main/graph/badge.svg)](https://codecov.io/gh/datalogix/laravel-utils)
[![License](https://poser.pugx.org/datalogix/laravel-utils/license)](https://packagist.org/packages/datalogix/laravel-utils)

> A Laravel package that provides a set of useful utilities and service providers to enhance your application.

## Requirements

- PHP 8.2 or higher
- Laravel 12 or 13

## Installation

You can install the package via composer:

```bash
composer require datalogix/laravel-utils
```

The package will automatically register itself.

## Features

These features work out of the box, with no additional configuration:

- 🌍 **Multi-language support**: Laravel's built-in translations (`auth`, `pagination`, `passwords`, `validation` and JSON strings) for English (`en`) and Brazilian Portuguese (`pt_BR`). They are loaded automatically, and any key your application defines in its own `lang/` folder takes precedence. Translations for Respect Validation rules and error pages are provided by their own packages.
- ✔️ **Respect Validation integration**: [Respect Validation](https://respect-validation.readthedocs.io) rules through [datalogix/laravel-validation](https://github.com/datalogix/laravel-validation), with zero setup.
- 🧠 **Query builder macros**: reusable macros for cleaner, more expressive queries, powered by [datalogix/laravel-builder-macros](https://github.com/datalogix/laravel-builder-macros).
- 🧩 **Sensible defaults**: opinionated, production-ready defaults for performance, security and testability, powered by [datalogix/laravel-sensible](https://github.com/datalogix/laravel-sensible).
- 🚨 **Error pages**: ready-to-use, customizable error pages, powered by [datalogix/laravel-error-pages](https://github.com/datalogix/laravel-error-pages).

## Helpers

```php
statesBR(); // ['AC' => 'Acre', 'AL' => 'Alagoas', ..., 'TO' => 'Tocantins']
```

## Translations

To customize the translations, publish them:

```bash
php artisan vendor:publish --tag="laravel-utils-lang"
```

This copies the package's whole `lang` folder into your application's `lang/` folder. Published keys take precedence over the package and no longer receive its updates; keys added to the package later are still loaded from it.

> [!NOTE]
> The `lang` tag still works but is deprecated and will be removed in the next major version. Use `laravel-utils-lang` instead.

Translations shipped by the bundled packages are published through their own tags:

```bash
php artisan vendor:publish --tag="laravel-validation-lang"
php artisan vendor:publish --tag="error-pages-lang"
```

## Changelog

See [GitHub Releases](https://github.com/datalogix/laravel-utils/releases).

## License

The MIT License (MIT). See [LICENSE](LICENSE).
