<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\forum;

class ForumController extends Controller
{
    public function index(){
        
        return view("frontend.forum.index");
	}

}