<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahasaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function indexBahasa()
    {
        return view('backend.bahasa.indexBahasa');
    }
}
