<!-- /*Milestone 1
 * V1
 * Chris King
 * 01/24/2021
 * web.php
 *Contains all necessary routes for the app
 */ -->
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
//route to main page
Route::get('/', function () {
    return view('welcome');
});
//authorization routes
Auth::routes();
//testing routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hello', 'HomeController@testhello')->name('hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
