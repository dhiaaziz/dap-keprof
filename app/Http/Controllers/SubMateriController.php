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
        // $data = SubMateri::all();
        $data = \DB::select('select s.*, m.nm_Materi from subMateri s LEFT JOIN materi m ON s.id_materi = m.id');
        // dd($data);
        return view('backend.submateri.indexSub', compact('data'));
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
        
         return redirect('/subMateri');;
    }

    public function editSubMateri($id){
        $data = \DB::table('submateri')
        ->leftjoin('materi','materi.id','=','submateri.id_materi')
        ->where('submateri.id',$id)->first(['submateri.*','materi.id as id_m','materi.nm_Materi']);
        $dataMateri = \DB::select('select nm_Materi as nama , id as id_materi from materi');
        return view('backend.submateri.editSubMateri', compact('data','dataMateri'));
    }

    public function updateSubMateri(Request $request)
    {
        if (!empty($request->file('gmbr_Sub'))) {

            $gambar = $request->file('gmbr_Sub');
            $imgname = preg_replace('/\s+/', '-', $request->nm_Sub).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/SubMateri',$imgname);
            $dbsldr = $imgname;
        }

        $Submateri = SubMateri::find($request->id);
        if ( $Submateri ){
            $Submateri->nm_Sub = $request->nm_Sub;
            $Submateri->isi_Sub = $request ->isi_Sub;
            $Submateri->gmbr_Sub = $dbsldr;
            $Submateri->id_materi = $request->group;
            $Submateri->save();
            
             $request->session()->flash('alert-success', 'Task was successfull'); 

        }
        else $request->session()->flash('alert-danger', 'Task failed');
        $data = \DB::select('select s.*, m.nm_Materi from subMateri s LEFT JOIN materi m ON s.id_materi = m.id');
        // dd($data);
        return view('backend.submateri.indexSub', compact('data'));
    }

    public function deleteSubMateri($id)
    {
        $delete = \DB::table('submateri')
        ->where('id',$id)->delete();
        
        $data = \DB::select('select s.*, m.nm_Materi from subMateri s LEFT JOIN materi m ON s.id_materi = m.id');
        // dd($data);
        return view('backend.submateri.indexSub', compact('data'));
    }
    
}
