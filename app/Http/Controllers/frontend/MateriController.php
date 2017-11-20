<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materi;

class MateriController extends Controller
{
    //
    public function index(){
      $Materi = \DB::select('select m.*, b.id as id_b, b.bahasa, b.warna from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id order by m.created_at DESC ');
        return view("frontend.materi.index", compact('Materi'));
    }
}
