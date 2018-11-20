<?php


$router->get('', 'VideosController@home');

$router->get('videos', 'VideosController@index');

$router->post('videos', 'VideosController@store');
