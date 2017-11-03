<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubMateri;

class SubMateriController extends Controller
{
    //
     public function index(){
        $submateri = SubMateri::all();
        return view("frontend.submateri.index", compact('submateri'));


         }

}
