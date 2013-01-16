# Laravel OAuth 2.0

**This is based on Opauth - http://opauth.org/**

Authorize users with your application implementing multiple Oauth2 providers.

## Currently Supported

- Facebook

** I've only tested it with Facebook. This does not mean that it won't work for other Oauth2 providers. Refer to http://opauth.org/ for help on implementing it. **

## Usage Example

http://example.com/opauth-bundle/public/facebook

```Route::get('/', array('uses' => 'home@index'));

Route::get('facebook, facebook/(:any)', array('as' => 'facebook', function() {
	Laravel\IoC::resolve('opauth-facebook');
}));

Route::post('done', array('as' => 'done', function(){
	$response = unserialize(base64_decode( $_POST['opauth'] ));
    echo("<pre>");
    print_r($response);
    echo("</pre>");
}));
```

After authorizing you'll be redirect to a link you've specified in:
/bundles/opauth/start.php
```$config = array(
	'Strategy' => array(
		'Facebook' => array(
			'app_id' => '322542281189355',
			'app_secret' => '299c474727fe3639db08015cad56ebcb'
		)		
	),
	'security_salt'	=> 'YOURSALTGOESHERE!',
	'path' 			=> '/opauth-bundle/public/',
	'callback_transport' => 'post',
	'callback_url'	=> '/opauth-bundle/public/done'
);```

#DO NOT FORGET TO CHANGE YOUR APP_ID & APP_SECRET