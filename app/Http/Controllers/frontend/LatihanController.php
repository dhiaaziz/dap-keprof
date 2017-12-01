<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Latihan;
use Illuminate\Support\Facades\DB;

class LatihanController extends Controller
{
    //
    public function index(){
        $Latihan= DB::table('latihan')
                ->leftJoin('bahasa','latihan.id_bahasa', '=', 'bahasa.id')
                ->select('latihan.*','bahasa.bahasa','bahasa.warna')
                ->orderBy('latihan.created_at', 'desc')
                ->paginate(5);
        return view("frontend.Latihan.index",compact('Latihan'));
    }
    public function tamplilLatihan($id){
        $latihan = \DB::table('latihan')
        ->leftjoin('bahasa', 'id_bahasa', '=', 'bahasa.id')
        ->where('latihan.id',$id)
        ->first(['latihan.*','bahasa.bahasa','bahasa.warna']);
        return view("frontend.Latihan.tampilLatihan",compact('latihan'));
    }
}
