<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latihan;

class LatihanController extends Controller
{
    public function indexLatihan()
    {
        $Latihan = Latihan::all();
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }

    public function addShowLatihan()
    {
        return view('backend.latihan.addLatihan');
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

            $add = (new Latihan())->addedlatihan($request->nm_latihan,$request->sl_latihan,$dbsldr,$dbsldr2);
            $request->session()->flash('alert-succes', 'Task was succesfull');
    
        } else $request->session()->flash('alert-danger', 'Task failed');
        
        
        return back();
    }

    public function editLatihan($id){
        $data = Latihan::find($id);
        return view('backend.latihan.editLatihan', compact('data'));
    }

    public function updateLatihan(Request $request){
        if (!empty ($request->file('srcCode'))) {
            
            $gambar = $request->file('srcCode');
            $imgname = preg_replace('/\s+/', '-', $request->nm_latihan).'.'.$gambar->getClientOriginalExtension();
            $gambar->storeAs('public/images/latihan',$imgname);
            $dbsldr = $imgname;
        }
        $latihan = Latihan::find($request->id);
        
        if ($latihan){
            $latihan->nm_latihan = $request->nm_latihan;
            $latihan->sl_latihan = $request->sl_latihan;
            $latihan->srcCode = $dbsldr;
            $latihan->save();

            $request->session()->flash('alert-success', 'Task was successfull'); 
        }

        else $request->session()->flash('alert-danger', 'Task failed');
        $Latihan = Latihan::all();
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }

    public function deleteLatihan($id){
        $delete = Latihan::find($id)->delete();

        $Latihan = Latihan::all();
        return view('backend.latihan.indexLatihan', compact('Latihan'));
    }
}
