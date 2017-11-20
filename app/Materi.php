<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Materi extends Model
{
    protected $table='materi';

    protected $fillable = [
        'nm_Materi', 'isi_Materi', 'gambar','id_bahasa','created_at','update_at'
    ];

    public function add($nm_Materi,$isi_Materi,$id_bahasa,$gambar){
        $current_time = Carbon::now()->toDateTimeString();
        $add = \DB::table('materi')
                ->insert(['nm_Materi'=> $nm_Materi , 'isi_Materi' => $isi_Materi ,'id_bahasa'=> $id_bahasa, 'gambar' => $gambar,'created_at' => $current_time,'updated_at' => $current_time]);

        return $add;
    }
}
