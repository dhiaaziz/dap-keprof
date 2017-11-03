<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahasa;


class BahasaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        // $data = SubMateri::all();
        $data = \DB::select('select * from bahasa');
        // dd($data);
        return view('backend.bahasa.index', compact('data'));
    }
    public function addBahasaShow()
    {
        // $dataBahasa = \DB::select('select nm_Materi as nama , id as id_materi from materi');
        return view('backend.bahasa.addBahasa');
    }

}
