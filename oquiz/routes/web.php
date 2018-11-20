<?php

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });



$router->get('/', [
    'as' => 'home', //as : definition du nom de la route
    'uses' => 'MainController@home' // uses : ou doit pointer ma route MonController@MaFonction
]);

$router->get('/quiz/{id}', [
    'as' => 'quiz', //as : definition du nom de la route
    'uses' => 'QuizController@quiz' // uses : ou doit pointer ma route MonController@MaFonction
]);

$router->post('/quiz/{id}', [
    'as' => 'quizPost', //as : definition du nom de la route
    'uses' => 'QuizController@quizPost' // uses : ou doit pointer ma route MonController@MaFonction
]);

$router->get('/signup', [
    'as' => 'inscription', //as : definition du nom de la route
    'uses' => 'UserController@signup' // uses : ou doit pointer ma route MonController@MaFonction
]);

$router->get('/signin', [
    'as' => 'connexion', //as : definition du nom de la route
    'uses' => 'UserController@signin' // uses : ou doit pointer ma route MonController@MaFonction
]);



