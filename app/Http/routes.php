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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function (){
    return "Bar";
});

/*Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{id}', 'ArticlesController@show');

Route::post('/articles/', 'ArticlesController@store');*/



Route::get('/contact', 'WelcomeController@contact');

Route::get('/about', 'WelcomeController@about');


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('api/todo', ['uses' => 'TodoController@index','middleware'=>'simpleauth']);

Route::post('api/todo', ['uses' => 'TodoController@store','middleware'=>'simpleauth']);

Route::resource('/articles', 'ArticlesController');

Route::get('managercheck', ['middleware'=>'manager', function(){

    return "This page may only see by manager";
}]);