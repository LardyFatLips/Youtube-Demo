<?php


namespace App\Core;

use Exception;

/**
 * Class Request
 * @package App\Core
 */
class Request

{


    /**
     * @return string
     */
    public static function uri()
	{

		return trim(

			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	}

    /**
     * @return mixed
     */
    public static function method()

	{

		return $_SERVER['REQUEST_METHOD'];


	}

    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public static function postParse($name){

        if(array_key_exists($name,$_POST)){

            return $_POST[$name];

        }else{

            throw new Exception('POST does not have correct data');
        }

    }


}