<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1505496733097657',
        'client_secret' => 'e499ebd37b9945cf74dce55f9811eac0',
        'redirect' => 'http://dev.diakopesstoxwrio.com/social/handle/facebook',
    ],

    'twitter' => [
        'client_id' => 'kYBtLNSVeAIMAJlyrYLvHS9vV',
        'client_secret' => 'lIUGVeZ94M8aNFN5c3i8pixxiouHrJWdYI4V5CuGuIaAUQZYVX',
        'redirect' => 'http://dev.diakopesstoxwrio.com/social/handle/twitter',
    ],

    'google' => [
        'client_id' => '989359327861-mv9n3jimequ9fgh6008jguti1k5u3485.apps.googleusercontent.com',
        'client_secret' => '6Bho138m8BYctFVmRWjao9aM',
        'redirect' => 'http://dev.diakopesstoxwrio.com/social/handle/google',
    ],


];
