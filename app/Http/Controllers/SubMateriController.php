<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;
use App\SubMateri;
use Image;

class SubMateriController extends Controller
{
    public function indexSub()
    {
        return view('backend.submateri.indexSub');
    }

    public function addShowSub()
    {
        $dataMateri = \DB::select('select nm_Materi as nama , id as id_materi from materi');
        return view('backend.submateri.addSubMateri', compact('dataMateri'));
    }

    public function addSubMateri(Request $request)
    {
        if (!empty ($request->nm_Sub)){
            $gmbrSub = $request->file('gmbr_Sub');
            // dd($gmbrSub);
            $imgnm = preg_replace('/\s+/', '-', $request->nm_Sub).'.'.$gmbrSub->getClientOriginalExtension();
            $gmbrSub->storeAs('public/images/SubMateri',$imgnm);
            $dbsldr = $imgnm;

            $added = (new SubMateri())->addedSub($request->nm_Sub,$request->isi_Sub,$dbsldr,$request->group);
            $request->session()->flash('alert-success', 'Task was successfull'); 
        
        }else $request->session()->flash('alert-danger', 'Task failed');
        
         return back();
    }
}
