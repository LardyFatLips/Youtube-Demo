<?php


/*
 *
 * Used to store config information that App will store
 *
 */



return [

	'database' =>[

		'name' => 'youtube',
		'username' => 'root',
		'password' => '',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

		]

	],
	'youtube' =>[

	 'key' => ''

	],
    'kafka' => [

     'broker' => '192.168.33.10'
    ]



];



