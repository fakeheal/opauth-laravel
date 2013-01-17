<?php

	Autoloader::map(array(
	   'Opauth' => __DIR__.'/Opauth/Opauth.php',
	));

	Laravel\IoC::singleton('opauth', function()
	{
	    $config = array(
			'Strategy' => array(
				'Facebook' => array(
					'app_id' 	 => '322542281189355',
					'app_secret' => '299c474727fe3639db08015cad56ebcb'
				),
				'Twitter' => array(
					'key' 	 => 'Z72ZGSMAsRrexDqmPKp61A',
					'secret' => 'iJnhBZuGmmHuvfhwz4b5F34L3OX4VQj00T7eBma76c'
				)			
			),
	    	'security_salt'	=> 'YOURSALTGOESHERE!',
	    	'path' 			=> '/opauth-bundle/public/',
	    	'callback_transport' => 'post',
	    	'callback_url'	=> '/opauth-bundle/public/done'
		);

		return new Opauth($config);
	});