<?php

	Autoloader::map(array(
	   'Opauth' => __DIR__.'/Opauth/Opauth.php',
	));

	Laravel\IoC::singleton('opauth', function()
	{
	    $config = array(
			'Strategy' => array(
				'Facebook' => array(
					'app_id' 	 => 'APP_ID',
					'app_secret' => 'APP_SECRET'
				),
				'Twitter' => array(
					'key' 	 => 'APP_KEY',
					'secret' => 'APP_SECRET'
				)			
			),
	    	'security_salt'	=> 'YOURSALTGOESHERE!',
	    	'path' 			=> '/opauth-bundle/public/',
	    	'callback_transport' => 'post',
	    	'callback_url'	=> '/opauth-bundle/public/done'
		);

		return new Opauth($config);
	});