<?php

use \App\Http\Controllers\ArbitreController;
use \App\Http\Controllers\EquipeController;

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

$router->get('/arbitres', 'ArbitreController@arbitres');
$router->get('/arbitre/{id}', 'ArbitreController@show');
$router->post('/arbitre/store','ArbitreController@store');


$router->get('/equipes','EquipeController@equipes');
$router->get('/equipe/{id}','EquipeController@show');
$router->post('/equipe/store','EquipeController@store');


$router->get('/matches','MatcheController@matches');
$router->get('/matche/{id}','MatcheController@show');
$router->post('/matche/store','MatcheController@store');