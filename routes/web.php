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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/aboutme", ["as" => "aboutme", function() {
  return View::make("aboutme");
}]);

Route::get("/mysubjects", ["as" => "mysubjects", function() {
  return View::make("mysubjects");
}]);

Route::get("/social", ["as" => "social", function() {
  return View::make("social");
}]);

Route::get("/education", ["as" => "education", function() {
  return View::make("education");
}]);

Route::get("/php2", ["as" => "php2", function() {
  return View::make("php2");
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
