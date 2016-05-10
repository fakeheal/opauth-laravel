# Opauth For Laravel 4.x
__Version 0.2 - Release Date: 10.05.2016__

**This is based on Opauth - http://opauth.org/**

Authorize users with your application implementing multiple Oauth2 providers.

## Currently Supported

- [All available strategies](https://github.com/opauth/opauth/wiki/List-of-strategies)

**I've only tested it with Facebook. This does not mean that it won't work for other Oauth2 providers. Refer to http://opauth.org/ for help on implementing it.**

## Usage Example

http://example.com/opauth/social/facebook

```php
Route::get('/', function () {
    echo '<a href="/opauth/social/facebook">Login with facebook</a>';
});

Route::any('opauth/social/{strategy}/{action?}', function () {
    app('opauth')->run();
});
```

Publish the config file and add your strategies:

`php artisan config:publish socialism/laravel-opauth` 

Config options:
https://github.com/opauth/opauth/wiki/Opauth-configuration

```php
return [
    'Strategy' => array(
        'Facebook' => array(
            'app_id' => 'APP_ID',
            'app_secret' => 'APP_SECRET'
        )
    ),
    'security_salt' => 'RANDOM SOME HASH!',
    'callback_transport' => 'post',
    'path' => '/opauth/social/' //This must match the route for app('opauth')->run();
];
```
 
##DO NOT FORGET TO CHANGE YOUR APP_ID & APP_SECRET