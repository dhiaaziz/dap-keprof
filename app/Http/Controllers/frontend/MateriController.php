<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Materi;
use Illuminate\Support\Facades\DB;


class MateriController extends Controller
{
    //
    public function index(){
      // $Materi = DB::select('select m.*, b.id as id_b, b.bahasa, b.warna from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id order by m.created_at DESC ');
      $Materi = DB::table('materi')
              ->leftJoin('bahasa','materi.id_bahasa', '=', 'bahasa.id')
              ->select('materi.*','bahasa.bahasa','bahasa.warna')
              ->orderBy('materi.created_at', 'desc')
              ->paginate(6);
        return view("frontend.materi.index", compact('Materi'));
    }
}
