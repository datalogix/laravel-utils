<?php

/*
|--------------------------------------------------------------------------
| Laravel Utils
|--------------------------------------------------------------------------
*/

return [
    'model' => [
        'unguard' => false,
    ],

    'locale' => [
        'category' => LC_ALL,
    ],

    'schema' => [
        'defaultStringLength' => 150,
    ],

    'https' => [
        'forceScheme' => app()->environment('production'),
        'middleware' => app()->environment('production'),
    ],

    'paginator' => [
        'defaultView' => 'pagination::tailwind',
        'defaultSimpleView' => 'pagination::simple-tailwind',
    ],
];
