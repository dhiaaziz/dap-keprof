<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table='materi';

    protected $fillable = [
        'nm_Materi', 'isi_Materi', 'gambar','id_bahasa'
    ];

    public function add($nm_Materi,$isi_Materi,$id_bahasa,$gambar){
        $add = \DB::table('materi')
                ->insert(['nm_Materi'=> $nm_Materi , 'isi_Materi' => $isi_Materi ,'id_bahasa'=> $id_bahasa, 'gambar' => $gambar]);
                
        return $add;
    }
}
