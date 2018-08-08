<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Email Domain Blackist Validation
    |--------------------------------------------------------------------------
    |
    | The email domain blacklist validation rule uses a remote or local source
    | to get updated and also allows to specify a custom append list.
    |
    | source: 
    |         You may specify the preferred URL or file path to update the
    |         blacklist.
    |         Keep null if you don't want to use a remote source.
    |
    | cache-key: 
    |         You may change the cache key for the sourced blacklist.
    |         Keep null if you want to use the default value.
    |
    | append:
    |         You may a string of pipe | separated domains list.
    |         Keep null if you don't want to append custom domains.
    |         Example: "example.com|foobar.com".
    |
    */

    'email' => [

        'blacklist' => [

            'source' => '',

            'cache-key' => null,

            'append' => null,

        ],

    ],

];