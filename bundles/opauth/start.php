<?php

	Autoloader::map(array(
	   'Opauth' => __DIR__.'/Opauth/Opauth.php',
	));

	Laravel\IoC::singleton('opauth-facebook', function()
	{
	    $config = array(
			'Strategy' => array(
				'Facebook' => array(
					'app_id' => 'YOUR_APP_ID_HERE',
					'app_secret' => 'YOUR_APP_SECRET_HERE'
				)		
			),
	    	'security_salt'	=> 'YOURSALTGOESHERE!',
	    	'path' 			=> '/opauth-bundle/public/',
	    	'callback_transport' => 'post',
	    	'callback_url'	=> '/opauth-bundle/public/done'
		);

		return new Opauth($config);
	});