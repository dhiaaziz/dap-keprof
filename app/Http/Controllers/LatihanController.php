<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latihan;

class LatihanController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function indexLatihan()
    {
        $Latihan = \DB::select('select l.*, b.bahasa from latihan l LEFT JOIN bahasa b on l.id_bahasa = b.id');
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }

    public function addShowLatihan()
    {
        $bahasa = \DB::select('select id as id_bahasa ,bahasa from bahasa');        
        return view('backend.latihan.addLatihan', compact('bahasa'));
    }

    public function addLatihan(Request $request){
        if (!empty ($request->nm_latihan)) {
            //sorCOde
            $gambar = $request->file('srcCode');
            $imgname = preg_replace('/\s+/', '-',$request->nm_latihan).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/latihan',$imgname);
            $dbsldr = $imgname;
            //gambar
            $gambar2 = $request->file('gambar');
            $imgname2 = preg_replace('/\s+/', '-','gmb_'. $request->nm_latihan).'.'.$gambar2->getClientOriginalExtension();
            $gambar2->storeAs('public/images/latihan',$imgname2);
            $dbsldr2 = $imgname2;

            $add = (new Latihan())->addedlatihan($request->nm_latihan,$request->sl_latihan,$request->id_bahasa,$dbsldr,$dbsldr2);
            $request->session()->flash('alert-succes', 'Task was succesfull');
    
        } else $request->session()->flash('alert-danger', 'Task failed');
        
        
        return back();
    }

    public function editLatihan($id){
        $data = Latihan::find($id);
        $bahasa = \DB::select('select id as id_bahasa ,bahasa from bahasa');
        return view('backend.latihan.editLatihan', compact('data','bahasa'));
    }

    public function updateLatihan(Request $request){
        if (!empty ($request->file('srcCode'))) {
            //source code
            $gambar = $request->file('srcCode');
            $imgname = preg_replace('/\s+/', '-', $request->nm_latihan).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/latihan',$imgname);
            $dbsldr = $imgname;
            //gambar
            $gambar2 = $request->file('gambar');
            $imgname2 = preg_replace('/\s+/', '-','gmb_'. $request->nm_latihan).'.'.$gambar2->getClientOriginalExtension();
            $gambar2->storeAs('public/images/latihan',$imgname2);
            $dbsldr2 = $imgname2;
        }
        $latihan = Latihan::find($request->id);
        
        if ($latihan){
            $latihan->nm_latihan = $request->nm_latihan;
            $latihan->sl_latihan = $request->sl_latihan;
            $latihan->gambar = $dbsldr2;
            $latihan->srcCode = $dbsldr;
            $latihan->id_bahasa =$request->id_bahasa;
            $latihan->save();

            $request->session()->flash('alert-success', 'Task was successfull'); 
        }

        else $request->session()->flash('alert-danger', 'Task failed');
        $Latihan = \DB::select('select l.*, b.bahasa from latihan l LEFT JOIN bahasa b on l.id_bahasa = b.id');
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }

    public function deleteLatihan($id){
        $delete = Latihan::find($id)->delete();

        $Latihan = Latihan::all();
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }
}
