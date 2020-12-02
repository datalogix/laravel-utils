<?php

/*
|--------------------------------------------------------------------------
| Laravel Utils
|--------------------------------------------------------------------------
*/

return [
    'model' => [
        'unguard' => true,
    ],

    'locale' => [
        'category' => LC_ALL,
    ],

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
