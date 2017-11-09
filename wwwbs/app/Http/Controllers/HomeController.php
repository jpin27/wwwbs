<?php

// magic. don't touch.
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // this shit loads the index page instead of explicitly defining it in our routes.
    // it loads /resources/views/welcome.blade.php
    // TODO: Restructure Hiba's index.blade.php to be the new welcome.blade.php
	public function index() {
		return view('welcome');
	}

	// TODO: Create login and register functions here

}
