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
            'name' => 'English (UK)',
            'locale' => 'en_GB',
            'url' => '/uk/',
        ],
        'ie' => [
            'name' => 'English (Ireland)',
            'locale' => 'en_IE',
            'url' => '/ie/',
        ],
        'us' => [
            'name' => 'English (US)',
            'locale' => 'en_US',
            'url' => '/us/',
        ],
        'ca' => [
            'name' => 'English (Canada)',
            'locale' => 'en_CA',
            'url' => '/ca/',
        ],
        'au' => [
            'name' => 'English (Australia)',
            'locale' => 'en_AU',
            'url' => '/au/',
        ],
        'nz' => [
            'name' => 'English (New Zealand)',
            'locale' => 'en_NZ',
            'url' => '/nz/',
        ],
        'mx' => [
            'name' => 'Spanish (Mexico)',
            'locale' => 'es_MX',
            'url' => '/mx/',
        ],
        'es' => [
            'name' => 'Spanish (Spain)',
            'locale' => 'es_ES',
            'url' => '/es/',
        ],

    ],
];
