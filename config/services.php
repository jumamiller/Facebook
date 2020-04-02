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
        'client_id' => '252893825754049',
        'client_secret' => '6ae9a2eae5cf24f9e2fc96a8ccf82454',
        'redirect' => 'https://192.168.10.10/login/facebook/callback',
    ],
    'google' => [

        'client_id' => '361516961158-va9ltsp1sapgeqnvmglblp61v6ap198q.apps.googleusercontent.com',

        'client_secret' => '0jWwABQ57snhAfpqEZ9HWkjW',

        'redirect' => 'https://192.168.10.10/auth/google/callback',

    ],

];

