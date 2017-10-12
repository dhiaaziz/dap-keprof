<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Latihan;

class LatihanController extends Controller
{
    //
    public function index(){
        $Latihan = Latihan::all();
        return view("frontend.Latihan.index",compact('Latihan'));
    }
}
