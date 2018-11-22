<?php

use App\Core\App;

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

/**
 * @param $name
 * @param array $data
 * @return mixed
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

/*
 *
 * This class serves to bootstrap and setup the application
 *
 * We bind the the config to our App storage as well as our PDO connection so we can use them later in the application
 *
 * View and redirect are here as well but could be put elsewhere
 *
 */