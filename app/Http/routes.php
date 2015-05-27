<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('projects', ['as' => 'author_projects', 'uses' => 'ProjectsController@get_list']);

Route::get('projects/new', ['as' => 'new_project', 'uses' => 'ProjectsController@get_new']);

Route::post('projects/create', array('uses' => 'ProjectsController@post_create'));

Route::get('list', 'ProjectsController@index');

Route::get(
    '/images/{file}',
    'MediaController@getImage'
);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
