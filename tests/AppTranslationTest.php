<?php

use Datalogix\Utils\Tests\AppTranslationTestCase;

uses(AppTranslationTestCase::class);

test('the package fills what the application does not define', function () {
    $this->app->setLocale('pt_BR');

    expect(__('validation.email', ['attribute' => 'nome']))->toBe('O campo nome deve ser um endereço de e-mail válido.');
    expect(__('Login'))->toBe('Entrar');
});
