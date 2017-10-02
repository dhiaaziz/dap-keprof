<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{ 
	public function index(){
        // $Materi = Materi::all();
        return view("frontend.home.index");
    }
    //
}
