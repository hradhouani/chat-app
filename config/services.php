<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'firebase' => [
        'api_key' => 'AIzaSyBgcRlc2cyeTINBYFfzJ_x63Gpy1FMHYy0',
        'auth_domain' => 'chat-application-c182a.firebaseapp.com',
        'database_url' => 'https://chat-application-c182a.firebaseio.com',
        'secret' => 'jDBezfTjnRnzzWfHIUtjwGcU5a9AIfXhGpxwiXhs',
        'storage_bucket' => 'chat-application-c182a.appspot.com',
        'project_id' => 'chat-application-c182a',
        'messaging_sender_id' => '890988489837'
    ]
];
