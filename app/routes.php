<?php


$router->get('', 'VideosController@home');

$router->get('index', 'VideosController@index');

$router->post('videos', 'VideosController@search');

$router->post('videos-store', 'VideosController@store');
