<?php
/**
 * Available options:
 * https://github.com/opauth/opauth/wiki/Opauth-configuration
 *
 * Available strategies:
 * https://github.com/opauth/opauth/wiki/List-of-strategies
 */
return [
    'Strategy' => array(
        'Facebook' => array(
            'app_id' => 'APP_ID',
            'app_secret' => 'APP_SECRET'
        )
    ),
    'security_salt' => 'RANDOM SOME HASH!',
    'callback_transport' => 'post',
    'path' => '/opauth/social/'
];