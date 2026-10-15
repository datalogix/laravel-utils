# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

- `composer test` — run the PHPUnit suite (Orchestra Testbench). Add `-- --no-coverage` to skip the clover/text coverage report configured in `phpunit.xml.dist`.
- `composer test -- --filter test_loads_the_json_translations` — run a single test (or `--filter TranslationTest` for a class).
- `composer lint` — format with Laravel Pint (default preset, no `pint.json`).

CI runs the shared workflow `datalogix/workflows/.github/workflows/laravel-tests.yml@v1`. `composer.lock` is gitignored, so supported versions are defined only by the constraints in `composer.json` (PHP ^8.2, Laravel 12 and 13).

## Architecture

This is a meta-package: `UtilsServiceProvider` (auto-discovered via `extra.laravel.providers`) mostly registers other datalogix packages in `register()`:

- `datalogix/laravel-builder-macros` (query builder macros)
- `datalogix/laravel-error-pages`
- `datalogix/laravel-sensible` (opinionated app defaults)
- `datalogix/laravel-validation` (Respect Validation rules)

Behavior from those packages belongs in their own repositories, not here. This package itself adds only:

- **Translations** in `lang/` (`en` and `pt_BR`, PHP files plus a JSON file per locale) for Laravel's built-in `auth`, `pagination`, `passwords` and `validation` strings. They are loaded with `$translator->addPath()` inside `callAfterResolving('translator', ...)`, not `loadTranslationsFrom()`. This makes them unnamespaced fallbacks: keys the application defines in its own `lang/` win, and the package fills in the rest (see `AppTranslationTest`). Translations for Respect Validation rules and error pages ship with those packages and are published through their own tags.
- **Helpers** in `src/helpers.php` (autoloaded via `autoload.files`), each wrapped in `function_exists`.

## Tests

- `tests/TestCase.php` extends `Orchestra\Testbench\TestCase` and registers `UtilsServiceProvider`. Tests that need a custom app setup override `getEnvironmentSetUp($app)`.
- `LangTest` is a plain PHPUnit test. It requires every locale in `LOCALES` to have exactly the same PHP files and keys as `en`, including JSON keys. When you add or rename a translation key, update `en` and every locale together. When you add a locale, add it to `LOCALES`.
