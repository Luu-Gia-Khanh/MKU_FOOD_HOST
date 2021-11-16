<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => '1023950065067484',
        'client_secret' => '3feb71eae565be86ac4106852d9f08cb',
        'redirect' => 'https://mkufood.tk/callback'
    ],
    'google' => [
        'client_id' => '1092317313945-2pvl9uvn4g8rgg1c24an79rpakk30e0c.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://mkufood.tk/google/callback'
    ],

];
