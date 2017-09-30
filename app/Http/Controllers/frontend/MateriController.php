<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materi;

class MateriController extends Controller
{
    //
    public function index(){
        $Materi = Materi::all();
        return view("frontend.materi.index", compact('Materi'));
    }
}
