<?php

namespace Datalogix\Utils\Tests;

use Illuminate\Filesystem\Filesystem;

class AppTranslationOverrideTest extends TestCase
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

    public function test_the_application_overrides_the_package_translations()
    {
        $this->app->setLocale('pt_BR');

        $this->assertSame('Custom nome', __('validation.required', ['attribute' => 'nome']));
        $this->assertSame('Custom', __('Forgot your password?'));
    }

    public function test_the_package_fills_what_the_application_does_not_define()
    {
        $this->app->setLocale('pt_BR');

        $this->assertSame('O campo nome deve ser um endereço de e-mail válido.', __('validation.email', ['attribute' => 'nome']));
        $this->assertSame('Entrar', __('Login'));
    }
}
