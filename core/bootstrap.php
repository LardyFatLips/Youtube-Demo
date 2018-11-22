<?php

use App\Core\App;

App::bind('config', require '../config.php');

App::bind('database', new QueryBuilder(

	Connection::make(App::get('config')['database'])

));

function view($name, $data = [])

{

	extract($data);
//	die(var_dump(extract));

	return require "../app/views/{$name}.view.php";

}


function redirect($path){


	header("Location: /{$path}");

}

/*
 *
 * This class serves to bootstrap and setup the application
 *
 * We bind the the config to our App storage (DI) as well as our PDO connection so we can use them later in the application
 *
 * View and redirect are here as well but could be put elsewhere
 *
 */