<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users',['uses' => 'TeacherController@getUsers']);
});

$router->get('/users',['uses' => 'TeacherController@getUsers']);
$router->post('/users',['uses' => 'TeacherController@add']);
$router->put('/users/{id}', 'TeacherController@update');
$router->delete('/users/{id}',['uses' => 'TeacherController@deleteTeacher']);
$router->get('/users/{id}', 'TeacherController@show');
