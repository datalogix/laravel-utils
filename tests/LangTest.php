<?php

namespace Datalogix\Utils\Tests;

use Illuminate\Support\Arr;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class LangTest extends TestCase
{
    protected const BASE = 'en';

    protected const LOCALES = ['pt_BR'];

    public static function locales(): array
    {
        return array_combine(static::LOCALES, array_map(fn ($locale) => [$locale], static::LOCALES));
    }

    #[DataProvider('locales')]
    public function test_json_files_have_the_same_keys(string $locale)
    {
        $this->assertSameKeys(
            $this->json(static::BASE),
            $this->json($locale),
        );
    }

    #[DataProvider('locales')]
    public function test_php_files_have_the_same_keys(string $locale)
    {
        $files = array_map('basename', glob($this->path(static::BASE).'/*.php'));

        $this->assertSame($files, array_map('basename', glob($this->path($locale).'/*.php')));

        foreach ($files as $file) {
            $this->assertSameKeys(
                require $this->path(static::BASE).'/'.$file,
                require $this->path($locale).'/'.$file,
                $file,
            );
        }
    }

    protected function assertSameKeys(array $base, array $locale, string $file = 'json'): void
    {
        $base = array_keys(Arr::dot($base));
        $locale = array_keys(Arr::dot($locale));

        $this->assertSame([], array_values(array_diff($base, $locale)), "Keys missing in {$file}.");
        $this->assertSame([], array_values(array_diff($locale, $base)), "Extra keys in {$file}.");
    }

    protected function json(string $locale): array
    {
        return json_decode(file_get_contents($this->path($locale).'.json'), true, flags: JSON_THROW_ON_ERROR);
    }

    protected function path(string $locale): string
    {
        return __DIR__.'/../lang/'.$locale;
    }
}
