<?php


namespace App\Core;

use Exception;

/**
 * Class App
 * @package App\Core
 *
 * Acts as a basic DI container to store register/bind and get information we may need later in the application
 *
 */
class App
{


    /**
     * @var array
     */
    protected static $registry = [];


    /**
     * @param $key
     * @param $value
     * As method is static call the static registry array and add to it
     */
    public static function bind($key, $value)
	{

		static::$registry[$key] = $value; 	

	}


    /**
     * @param $key
     * @return mixed
     *
     *  As method is static call the static registry array and get from it via the key after checking to see if exists
     */
    public static function get($key)
	{

		if(! array_key_exists($key, static::$registry)){

			throw new Exception('No {$key} is bound in the container');
		}

		return static::$registry[$key];

	}

}