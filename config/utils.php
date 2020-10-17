<?php

/*
|--------------------------------------------------------------------------
| Laravel Utils
|--------------------------------------------------------------------------
*/

return [
    'locale' => config('app.locale', 'pt_BR'),

    'schema' => [
        'defaultStringLength' => 150,
    ],

    'middleware' => [
        'forceHttps' => app()->environment('production'),
    ],

    'paginator' => [
        'defaultView' => 'pagination::tailwind',
        'defaultSimpleView' => 'pagination::simple-tailwind',
    ],
];
