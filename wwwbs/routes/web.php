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

Route::get('add', function () {
    return view('addStaff1');
});

Route::get('register1', function () {
    return view('auth.Custom_register');
});

Route::get('booking', function () {
    return view('myBooking');
});

Route::get('bookappt', function () {
	// select * from users where id in (select user_id from role_user where role_id=2);
	// $docs_id = DB::table('role_user')
	// 					->where('role_id', '2')
	// 					->get();
	// $doctors = DB::table('users')->where('id', $docs_id)->union($docs_id)->get();

    return view('bookings');
});

Route::get('master', function () {
    return view('welcome');
});

Route::get('addStaff', function () {
    return view('addStaff');
});

Route::get('log', function () {
    return view('auth.Custom_Login');
});

Route::get('resetpass', function () {
    return view('auth.passwords.email');
});

// boop

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
