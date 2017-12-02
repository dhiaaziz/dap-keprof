<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\forum;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(){
      $forums = \DB::table('forum')
              ->join('users','users.id', '=', 'forum.id_user')
              ->select('forum.*','users.name')
              ->orderBy('forum.created_at', 'desc')->get();
              // dd($forums);
        return view("frontend.forum.index", compact('forums'));
	}
    public function tampil(){

        return view("frontend.forum.tampil");
  }

    public function tanya(){

        return view("frontend.forum.tanya");
  }
    public function storePertanyaan(Request $request){
      $current_time = Carbon::now()->toDateTimeString();
      \DB::table('forum')->insert(
          ['judul_forum' => $request->judul_forum, 'isi_forum' => $request->isi_forum,'kategori' => $request->kategori,'id_user' => $request->id_user,'created_at' => $current_time,'updated_at' => $current_time]
      );
      return view("frontend.forum.tanya");
  }
  public function bagi(){

      return view("frontend.forum.bagi");
  }

}
