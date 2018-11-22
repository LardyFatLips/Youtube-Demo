<?php

/*
 *
 * This class serves to bootstrap and setup the application + giving a couple of global methods
 *
 * We bind the the config to our App DI container/storage as well as our PDO connection so we can use them later in the application with ease
 *
 *
 */


use App\Core\App;

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

/**
 * @param $name
 * @param array $data
 * @return mixed
 *
 * Once the controller has received the request delegated/interacted with the application and got any data it needs, we finally require the view/template as a response
 *
 * Extracts the data if array and turns into variables with values, maybe a bit ott but fine to be safe
 */
function view($name, $data = [])

{

	extract($data);

	return require "../app/views/{$name}.view.php";

}


/**
 * @param $path
 */
function redirect($path){


	header("Location: /{$path}");

}

