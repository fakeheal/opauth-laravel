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
            'app_id' => '368848319968353',
            'app_secret' => 'f405fb30ae8225a7db40df904698fb73'
        )
    ),
    'security_salt' => 'RANDOM SOME HASH!',
    'callback_transport' => 'post',
    'path' => '/opauth/social/'
];