<?php

/*
 *
 * Puts the routes in the an array of routes for given request types
 * Each then has another associative array underneath it with the uri and controller acting as a key value pairing
 * Separated as scalable but also means that posts can't be hit via web browser etc as checks request method in associative array with controllers when routing
 *
 */


$router->get('', 'VideosController@home');

$router->get('index', 'VideosController@index');

$router->post('videos', 'VideosController@search');

$router->post('videos-store', 'VideosController@store');


