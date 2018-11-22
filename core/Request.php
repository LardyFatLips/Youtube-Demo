<?php


namespace App\Core;

use Exception;

/**
 * Class Request
 * @package App\Core
 *
 * Fetches or parses info about the current browser request etc
 *
 */
class Request

{


    /**
     * @return string
     *
     * parses the request uri and gets the php url path, need to do this to avoid get values etc getting in way
     * Trims off the / at start
     *
     */
    public static function uri()
	{

		return trim(

			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	}

    /**
     * @return mixed
     *
     * Sends back the request method, get, post, patch etc
     *
     */
    public static function method()

	{

		return $_SERVER['REQUEST_METHOD'];


	}

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     *
     * Checks the POST request to ensure that we have correct values passed
     *
     */
    public static function postParse($name){

        if(array_key_exists($name,$_POST)){

            return $_POST[$name];

        }else{

            throw new Exception('POST does not have correct data');
        }

    }


}