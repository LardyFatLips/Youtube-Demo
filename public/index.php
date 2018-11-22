<?php


use App\Core\Router;
use App\Core\Request;

/*
 * Serve from
 *
 * Get the autoload file that composer gives due to class map.
 * Horrid having to require everything so this is better
 * Get the bootstrap file
 */


require '../vendor/autoload.php';

require '../core/bootstrap.php';

Router::load('../app/routes.php')

	->direct(Request::uri(), Request::method());


