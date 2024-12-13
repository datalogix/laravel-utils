<?php

/*
|--------------------------------------------------------------------------
| Laravel Utils
|--------------------------------------------------------------------------
*/

return [
    'model' => [
        'strict' => env('UTILS_MODEL_STRICT', ! app()->environment('production')),
        'unguard' => env('UTILS_MODEL_UNGUARD', false),
    ],

    'locale' => [
        'category' => env('UTILS_LOCALE_CATEGORY', LC_ALL),
    ],

    'schema' => [
        'defaultStringLength' => env('UTILS_SCHEMA_STRING_LENGTH', 150),
    ],

    'https' => [
        'forceScheme' => env('UTILS_HTTPS_FORCE_SCHEME', app()->environment('production')),
        'middleware' => env('UTILS_HTTPS_MIDDLEWARE', app()->environment('production')),
    ],

    'paginator' => [
        'defaultView' => env('UTILS_PAGINATOR_VIEW', 'pagination::tailwind'),
        'defaultSimpleView' => env('UTILS_PAGINATOR_SIMPLE_VIEW', 'pagination::simple-tailwind'),
    ],
];
