<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    //
    protected $table = 'bahasa';

    protected $fillable = [
        'nm_Materi', 'isi_Materi', 'gambar','id_bahasa'
    ];
    public function add($bahasa,$gambar){
        $add = \DB::table('bahasa')
                ->insert(['bahasa'=> $bahasa , 'gambar' => $gambar]);

        return $add;

}
