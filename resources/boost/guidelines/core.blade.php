## Laravel Utils

`datalogix/laravel-utils` is a meta-package: its auto-discovered `UtilsServiceProvider` registers `datalogix/laravel-builder-macros`, `datalogix/laravel-error-pages`, `datalogix/laravel-sensible` and `datalogix/laravel-validation`. Follow those packages' own guides for their features.

### Translations

- Ships Laravel's `auth`, `pagination`, `passwords` and `validation` lines plus JSON strings for `en` and `pt_BR`, without a namespace (`__('validation.required')`, `__('Forgot your password?')`).
- Keys defined in the application's `lang/` folder win over the package: override only the keys you need instead of publishing everything.
- Publish with `php artisan vendor:publish --tag=laravel-utils-lang` (the `lang` tag is deprecated).

### Helpers

@verbatim
<code-snippet name="Brazilian states" lang="php">
statesBR(); // ['AC' => 'Acre', 'AL' => 'Alagoas', ..., 'TO' => 'Tocantins']
</code-snippet>
@endverbatim
