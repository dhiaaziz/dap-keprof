<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubMateri;

class SubMateriController extends Controller
{
    //
     public function tampilSub($id_materi){
        $materi = \DB::table('materi')
        ->leftjoin('bahasa', 'id_bahasa', '=', 'bahasa.id')
        ->where('materi.id',$id_materi)
        ->first(['materi.*','bahasa.id','bahasa.bahasa','bahasa.warna']);
        // dd($materi);

        $submateri = \DB::select('select * from submateri where id_materi = :id_materi', ['id_materi' => $id_materi]);
        return view("frontend.submateri.tampil", compact('materi','submateri'));


       }

}
