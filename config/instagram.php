<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [
            'client_id' => '6bd0d43dcbdb41f0bb635f04b781f501',
            'client_secret' => '762e179dc9b64fdd906bed99d872e7e3',
            'callback_url' => 'http://dev.diakopesstoxwrio.com',
        ],

        'alternative' => [
            'client_id' => 'your-client-id',
            'client_secret' => null,
            'callback_url' => null,
        ],

    ],

];
