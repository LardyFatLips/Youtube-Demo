<?php


namespace App\Core;

use Exception;

class Request

{


	public static function uri()
	{

		return trim(

			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

	}

	public static function method()

	{

		return $_SERVER['REQUEST_METHOD'];


	}

	public static function postParse($name){

        if(array_key_exists($name,$_POST)){

            return $_POST[$name];

        }else{

            throw new Exception('POST does not have correct data');
        }

    }


}