<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    //
	
	public function home(){
		return view('welcome');
	}

	public function map(){
		return view('map');
		}
}
