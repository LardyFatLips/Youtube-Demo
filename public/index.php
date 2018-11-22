<?php


use App\Core\Router;
use App\Core\Request;

/*
 * Serve from
 *
 * Require autoload.php from composer to get the autoload file that composer generates due to class map. Load every file within application with ./
 * Horrid having to require everything so this is better
 *
 * Get the bootstrap file
 *
 * Router load in the routes file then call direct method to the given controller using the Request classes uri and request method methods
 * Controller will then call service etc and return a view
 * Return method is within bootstrap
 */


require '../vendor/autoload.php';

require '../core/bootstrap.php';

Router::load('../app/routes.php')

	->direct(Request::uri(), Request::method());


