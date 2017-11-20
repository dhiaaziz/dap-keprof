<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Bahasa extends Model
{
    //

    protected $table = 'bahasa';

    protected $fillable = [
        'nm_Materi', 'isi_Materi', 'gambar','id_bahasa','warna','created_at','update_at'
    ];
    public function addBahasa($bahasa,$gambar,$color){
        $current_time = Carbon::now()->toDateTimeString();
        $add = \DB::table('bahasa')
                ->insert(['bahasa'=> $bahasa , 'gambar' => $gambar, 'warna'=> $color,'created_at' => $current_time,'updated_at' => $current_time]);

        return $add;
      }
}
