<?php

namespace Datalogix\Utils\Tests\Lang;

use Illuminate\Support\Arr;

const BASE = 'en';

const LOCALES = ['pt_BR'];

test('json files have the same keys', function (string $locale) {
    assertSameKeys(json(BASE), json($locale));
})->with(LOCALES);

test('php files have the same keys', function (string $locale) {
    $files = array_map('basename', glob(path(BASE).'/*.php'));

    expect(array_map('basename', glob(path($locale).'/*.php')))->toBe($files);

    foreach ($files as $file) {
        assertSameKeys(require path(BASE).'/'.$file, require path($locale).'/'.$file, $file);
    }
})->with(LOCALES);

test('json files have the same placeholders', function (string $locale) {
    $translations = json($locale);

    foreach (array_keys(json(BASE)) as $key) {
        expect(placeholders($translations[$key]))->toBe(placeholders($key), "Placeholders differ in [{$key}].");
    }
})->with(LOCALES);

function assertSameKeys(array $base, array $locale, string $file = 'json'): void
{
    $base = array_keys(Arr::dot($base));
    $locale = array_keys(Arr::dot($locale));

    expect(array_values(array_diff($base, $locale)))->toBe([], "Keys missing in {$file}.");
    expect(array_values(array_diff($locale, $base)))->toBe([], "Extra keys in {$file}.");
}

function json(string $locale): array
{
    return json_decode(file_get_contents(path($locale).'.json'), true, flags: JSON_THROW_ON_ERROR);
}

function path(string $locale): string
{
    return __DIR__.'/../lang/'.$locale;
}

function placeholders(string $line): array
{
    preg_match_all('/:[A-Za-z][\w-]*/', $line, $matches);

    $placeholders = $matches[0];
    sort($placeholders);

    return $placeholders;
}
