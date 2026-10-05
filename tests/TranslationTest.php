<?php

namespace Datalogix\Utils\Tests;

use Illuminate\Support\Facades\Validator;

class TranslationTest extends TestCase
{
    public function test_loads_the_php_translations()
    {
        $this->app->setLocale('pt_BR');

        $this->assertSame('O campo nome é obrigatório.', __('validation.required', ['attribute' => 'nome']));
        $this->assertSame('&laquo; Anterior', __('pagination.previous'));
    }

    public function test_loads_the_json_translations()
    {
        $this->app->setLocale('pt_BR');

        $this->assertSame('Esqueceu sua senha?', __('Forgot your password?'));
    }

    public function test_translates_the_validation_attributes()
    {
        $this->app->setLocale('pt_BR');

        $validator = Validator::make([], ['first_name' => 'required']);

        $this->assertSame('O campo Primeiro nome é obrigatório.', $validator->errors()->first('first_name'));
    }

    public function test_keeps_the_respect_validation_translations()
    {
        $this->app->setLocale('pt_BR');

        $validator = Validator::make(['cpf' => '111'], ['cpf' => 'cpf']);

        $this->assertSame('O campo CPF deve ser um CPF válido.', $validator->errors()->first('cpf'));
    }
}
