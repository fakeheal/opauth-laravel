<?php

	Autoloader::map(array(
	   'Opauth' => __DIR__.'/Opauth/Opauth.php',
	));

	Laravel\IoC::singleton('opauth-facebook', function()
	{
	    $config = array(
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
		);

		return new Opauth($config);
	});