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
    return "microbiome web";
//    return $errors;
});

//Route::get('/api/test', function () {
//    return "sasad";
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
