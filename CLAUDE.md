# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Commands

- `composer test` — run the Pest suite (Orchestra Testbench). Add `-- --no-coverage` to skip the clover/text coverage report configured in `phpunit.xml.dist`.
- `composer test -- --filter "loads the json translations"` — run a single test by its description, or `composer test -- tests/TranslationTest.php` for one file.
- `composer lint` — check only: Laravel Pint in `--test` mode (default preset, no `pint.json`) and PHPStan with Larastan at level 5 over `src/` (`phpstan.neon.dist`).
- `composer format` — format with Laravel Pint.

CI runs `.github/workflows/datalogix.yml`, which calls the shared `datalogix/workflows/.github/workflows/package.yml@v2` (coverage must stay at 100%). `composer.lock` is gitignored, so supported versions are defined only by the constraints in `composer.json` (PHP ^8.2, Laravel 12 and 13).

## Architecture

This is a meta-package: `UtilsServiceProvider` (auto-discovered via `extra.laravel.providers`) mostly registers other datalogix packages in `register()`:

- `datalogix/laravel-builder-macros` (query builder macros)
- `datalogix/laravel-error-pages`
- `datalogix/laravel-sensible` (opinionated app defaults)
- `datalogix/laravel-validation` (Respect Validation rules)

Behavior from those packages belongs in their own repositories, not here. This package itself adds only:

- **Translations** in `lang/` (`en` and `pt_BR`, PHP files plus a JSON file per locale) for Laravel's built-in `auth`, `pagination`, `passwords` and `validation` strings. They are loaded inside `callAfterResolving('translator', ...)` with `$translator->addPath()`, not `loadTranslationsFrom()`, so they are unnamespaced. The application's `lang` path is added again right after, because the last path added wins: keys the application defines in its own `lang/` win, and the package fills in the rest (see `AppTranslationTest`). They are published with the `laravel-utils-lang` tag; `lang` is a deprecated alias, to be removed in the next major. Translations for Respect Validation rules and error pages ship with those packages and are published through their own tags.
- **Helpers** in `src/helpers.php` (autoloaded via `autoload.files`), each wrapped in `function_exists`.
- **Laravel Boost guideline** in `resources/boost/guidelines/core.blade.php`, shipped to applications that use Boost. Keep it in sync with the README.

## Tests

- Pest on top of Orchestra Testbench. There is no `tests/Pest.php`: each test file binds its base class with `uses(TestCase::class)`. `tests/TestCase.php` registers `UtilsServiceProvider`; tests that need a custom app setup use their own subclass overriding `getEnvironmentSetUp($app)`, like `tests/AppTranslationTestCase.php`.
- `LangTest` runs without Testbench. For every locale in `LOCALES` it requires the same PHP files, keys (including JSON keys) and placeholders as `en`; it also requires the `attributes` in each `validation.php` to match that locale's JSON glossary, and the `en` PHP files to contain the framework's stock lines unchanged. When you add or rename a translation key, update `en` and every locale together. When you add a locale, add it to `LOCALES`.

## Conventions

- Issues and pull requests: English
