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
            //   dd($forums);
        return view("frontend.forum.index", compact('forums'));
    }
    
    public function tampil($id){
        $forum =\DB::table('forum')
        ->where('id',$id)->get();
        $dataKomentar = \DB::table('forumjawaban')
        ->leftjoin('users', 'forumjawaban.id_user','=','users.id')
        ->where('forumjawaban.id_forum',$id)->get(['forumjawaban.*','users.name as name']);
        // $forum = \DB::table('forum')
        // ->leftjoin('forumjawaban','forum.id','=','forumjawaban.id_forum')
        // ->leftjoin('users', 'forumjawaban.id_user','=','users.id')
        // ->where('forum.id',$id)->first(['forum.*','forumjawaban.id_user as user','forumjawaban.id as id_jawaban','forumjawaban.created_at as date','forumjawaban.id_forum','forumjawaban.jawaban','users.id as nama']);
        // dd($dataKomentar);
        return view("frontend.forum.tampil",compact('forum','dataKomentar'));
    }

    public function tanya(){

        return view("frontend.forum.tanya");
    }

    public function storePertanyaan(Request $request){
      $current_time = Carbon::now()->toDateTimeString();
      \DB::table('forum')->insert(
          ['judul_forum' => $request->judul_forum, 'isi_forum' => $request->isi_forum,'kategori' => $request->kategori,'id_user' => $request->id_user,'created_at' => $current_time,'updated_at' => $current_time]
      );
      return redirect('/frontend/forum');
    }

    public function bagi(){

        return view("frontend.forum.bagi");
    }

    public function storeBagi(Request $request){
        $current_time = Carbon::now()->toDateTimeString();
        \DB::table('forum')->insert(
            ['judul_forum' => $request->judul_forum, 'isi_forum' => $request->isi_forum,'kategori' => $request->kategori,'id_user' => $request->id_user,'created_at' => $current_time,'updated_at' => $current_time]
        );
        return redirect('/frontend/forum');
        ;
    }

    public function storeKomentar(Request $request)
    {
        $current_time = Carbon::now()->toDateTimeString();
        \DB::table('forumjawaban')->insert(
            ['id_forum' => $request->id_forum, 'jawaban' => $request->jawaban, 'id_user' => $request->id_user, 'created_at' => $current_time, 'updated_at' => $current_time]
        );
        return redirect('/frontend/forum/tampil/'.$request->id_forum);
    }

}
