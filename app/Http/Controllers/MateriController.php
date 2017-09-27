<?php

namespace App\Http\Controllers;

use App\Materi;
use Image;
use Illuminate\Http\Request;


class MateriController extends Controller
{
    public function indexMateri(){

        $Materi = Materi::all();
        return view("backend.materi.indexMateri", compact('Materi'));
    }

    public function addShow(){
        return view("backend.materi.addMateri");
    }

    public function addMateri(Request $request){
        if (!empty($request->nm_Materi)) {
            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-', $request->nm_Materi).'.'.$gambar->getClientOriginalExtension();
            // $sldpath = public_path('images/materi');
            // $thumbnail = \Image::make($gamabr->getRealPath())->resize(200, 200);
            // $thumbnail->save($sldpath.'/'.$imgname, 80);
            $gambar->storeAs('public/images/materi',$imgname);
            $dbsldr = $imgname;
            
            $added = (new Materi())->add($request->nm_Materi,$request->isi_Materi,$dbsldr);
            $request->session()->flash('alert-success', 'Task was successfull'); 
            
        } else $request->session()->flash('alert-danger', 'Task failed');
       
        return back();
        
    }
}
