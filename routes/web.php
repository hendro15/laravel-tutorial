<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$router->get('/', 'WelcomeController@index');
$router->get('events', 'EventsController@index');
$router->get('events/{id}', 'EventsController@show');
// mark "?" means that the variable is optional, its global value must be declared in controller
/* $router->get('events/category/{category}/{subcategory?}', 'EventsController@category');
$router->get('meetups/{id}', 'EventsController@show')->name('events.show'); */