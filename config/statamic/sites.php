<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Each site should have root URL that is either relative or absolute. Sites
    | are typically used for localization (eg. English/French) but may also
    | be used for related content (eg. different franchise locations).
    |
    */

    'sites' => [

        'default' => [
            'name' => 'Epos Now',
            'locale' => 'en_US',
            'url' => '/',
        ],
        'mx' => [
            'name' => 'MX Site',
            'locale' => 'es_MX',
            'url' => '/mx/',
        ],

        'uk' => [
            'name' => 'UK Site',
            'locale' => 'en_GB',
            'url' => '/us/',
        ],

    ],
];
