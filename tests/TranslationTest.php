<?php

use Datalogix\Utils\Tests\TestCase;
use Illuminate\Support\Facades\Validator;

uses(TestCase::class);

test('loads the php translations', function () {
    $this->app->setLocale('pt_BR');

    expect(__('validation.required', ['attribute' => 'nome']))->toBe('O campo nome é obrigatório.');
    expect(__('pagination.previous'))->toBe('&laquo; Anterior');
});

test('loads the json translations', function () {
    $this->app->setLocale('pt_BR');

    expect(__('Forgot your password?'))->toBe('Esqueceu sua senha?');
});

test('translates the validation attributes', function () {
    $this->app->setLocale('pt_BR');

    $validator = Validator::make([], ['first_name' => 'required']);

    expect($validator->errors()->first('first_name'))->toBe('O campo Primeiro nome é obrigatório.');
});

test('keeps the respect validation translations', function () {
    $this->app->setLocale('pt_BR');

    $validator = Validator::make(['cpf' => '111'], ['cpf' => 'cpf']);

    expect($validator->errors()->first('cpf'))->toBe('O campo CPF deve ser um CPF válido.');
});
