<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table='materi';

    protected $fillable = [
        'nm_Materi', 'isi_Materi', 'gambar',
    ];

    public function add($nm_Materi,$isi_Materi,$gambar){
        $add = \DB::table('materi')
                ->insert(['nm_Materi'=> $nm_Materi , 'isi_Materi' => $isi_Materi , 'gambar' => $gambar]);
                
        return $add;
    }
}
