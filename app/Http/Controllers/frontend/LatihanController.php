<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LatihanController extends Controller
{
    //
    public function index(){
        // $Materi = Materi::all();
        return view("frontend.latihan.index");}
}
