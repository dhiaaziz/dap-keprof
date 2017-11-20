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

    public function addBahasa(Request $request)
    {
      if (!empty ($request->bahasa)){
          $gmbr = $request->file('gambar');
          // dd($gmbrSub);
          $imgnm = preg_replace('/\s+/', '-', $request->bahasa).'.'.$gmbr->getClientOriginalExtension();
          $gmbr->storeAs('public/images/bahasa',$imgnm);
          $dbsldr = $imgnm;

          $added = (new Bahasa())->addBahasa($request->bahasa,$dbsldr,$request->warna);
          $request->session()->flash('alert-success', 'Task was successfull');

      }else $request->session()->flash('alert-danger', 'Task failed');

      return redirect('/bahasa');
        // $dataBahasa = \DB::select('select nm_Materi as nama , id as id_materi from materi');
    }

    public function editBahasa($id)
    {
        $databahasa = \DB::table('bahasa')
        ->where('id',$id)->first();
        // dd($data);
        return view("backend.bahasa.editBahasa", compact('data','databahasa'));
    }

    public function updateBahasa(Request $request)
    {
        if (!empty($request->file('gambar'))) {

            $gmbr = $request->file('gambar');
            // dd($gmbrSub);
            $imgnm = preg_replace('/\s+/', '-', $request->bahasa).'.'.$gmbr->getClientOriginalExtension();
            $gmbr->storeAs('public/images/bahasa',$imgnm);
            $dbsldr = $imgnm;

        }

        $bahasa = Bahasa::find($request->id);
        if ( $bahasa ){
            $bahasa->bahasa = $request->bahasa;
            $bahasa->gambar = $dbsldr;
            $bahasa->warna = $request->warna;
            $bahasa->save();
             $request->session()->flash('alert-success', 'Task was successfull');

        }
        else $request->session()->flash('alert-danger', 'Task failed');

        return redirect('/bahasa');
    }

    public function deleteBahasa($id)
    {
        $delete = \DB::table('bahasa')
        ->where('id',$id)->delete();

        return redirect('/bahasa');
    }



}
