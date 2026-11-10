<?php

namespace Datalogix\Utils\Tests;

use Illuminate\Filesystem\Filesystem;

abstract class AppTranslationTestCase extends TestCase
{
    protected string $langPath;

    protected function getEnvironmentSetUp($app): void
    {
        parent::getEnvironmentSetUp($app);

        $this->langPath = sys_get_temp_dir().'/laravel-utils-lang-'.uniqid();

        (new Filesystem)->ensureDirectoryExists($this->langPath.'/pt_BR');
        file_put_contents($this->langPath.'/pt_BR/validation.php', "<?php\n\nreturn ['required' => 'Custom :attribute'];\n");
        file_put_contents($this->langPath.'/pt_BR.json', json_encode(['Forgot your password?' => 'Custom']));

        $app->useLangPath($this->langPath);
    }

    protected function tearDown(): void
    {
        (new Filesystem)->deleteDirectory($this->langPath);

        parent::tearDown();
    }
}
