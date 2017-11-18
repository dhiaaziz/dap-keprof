<?php

namespace App\Http\Controllers;

use App\Materi;
use Image;
use Illuminate\Http\Request;


class MateriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function indexMateri(){

        // $Materi = Materi::all();
        // dd($Materi);
        $Materi = \DB::select('select m.*, b.id as id_b, b.bahasa from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id ');
        return view("backend.materi.indexMateri", compact('Materi'));
    }

    public function addShow(){
        $databahasa = \DB::select('select id as id_bahasa , bahasa  from bahasa');

        return view("backend.materi.addMateri", compact('databahasa'));
    }

    public function addMateri(Request $request){
        if (!empty($request->nm_Materi)) {
            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-', $request->nm_Materi).'.'.$gambar->getClientOriginalExtension();
            // $sldpath = public_path('images/materi');
            // $thumbnail = \Image::make($gamabr->getRealPath())->resize(200, 200);
            // $thumbnail->save($sldpath.'/'.$imgname, 80);
            $gambar->storeAs('public/images/materi',$imgname);
            // dd($request);
            $dbsldr = $imgname;

            $added = (new Materi())->add($request->nm_Materi,$request->isi_Materi,$request->id_bahasa,$dbsldr);
            $request->session()->flash('alert-success', 'Task was successfull');

        } else $request->session()->flash('alert-danger', 'Task failed');

        return redirect('/materi');

    }

    public function editMateri($id)
    {
        $data = \DB::table('materi')
        ->where('id',$id)->first();
        $databahasa = \DB::select('select id as id_bahasa , bahasa  from bahasa');
        // dd($data);
        return view("backend.materi.editMateri", compact('data','databahasa'));
    }

    public function updateMateri(Request $request)
    {
        if (!empty($request->file('gambar'))) {

            $gambar = $request->file('gambar');
            $imgname = preg_replace('/\s+/', '-', $request->nm_Materi).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/materi',$imgname);
            $dbsldr = $imgname;
        }

        $materi = Materi::find($request->id);
        if ( $materi ){
            $materi->nm_Materi = $request->nm_Materi;
            $materi->isi_Materi = $request ->isi_Materi;
            $materi->gambar = $dbsldr;
            $materi->id_bahasa = $request->id_bahasa;
            $materi->save();

             $request->session()->flash('alert-success', 'Task was successfull');

        }
        else $request->session()->flash('alert-danger', 'Task failed');
        $Materi = \DB::select('select m.*, b.id as id_b, b.bahasa from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id ');
        return view("backend.materi.indexMateri", compact('Materi'));
    }

    public function deleteMateri($id)
    {
        $delete = \DB::table('materi')
        ->where('id',$id)->delete();

        $Materi = \DB::select('select m.*, b.id as id_b, b.bahasa from materi m LEFT JOIN bahasa b On m.id_bahasa = b.id ');
        return view("backend.materi.indexMateri", compact('Materi'));
    }
}
