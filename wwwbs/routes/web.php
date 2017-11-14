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

/*
 / When the homepage (http://localhost:8000) is called, summon the main Controller with the index() method.
 / the file is at /app/Http/Controllers/Controller.php
*/
Route::get('/', 'Controller@index');

/*
 / Tiny little module to test database connection.
 / This is at http://localhost:8080/test.
 / TODO: Move to PHPUnit testing at some point
 */
Route::get('test', function() {
	if(DB::connection()->getDatabaseName())
	{
	   echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
	}
});


Route::get('bookappt', function () {
    return view('booking');
});

Route::get('master', function () {
    return view('welcome');
});

Route::get('addStaff', function () {
    return view('addStaff');
});
// boop

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
