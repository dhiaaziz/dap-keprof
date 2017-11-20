<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Latihan extends Model
{

    protected $table = 'latihan';

    protected $fillable = [
        'nm_latihan', 'sl_latihan', 'srcCode',
    ];

    public function addedlatihan($nm_latihan,$sl_latihan,$id_bahasa,$srcCode,$gambar){
        $current_time = Carbon::now()->toDateTimeString();
        $added = \DB::table('latihan')
        ->insert(['nm_latihan'=>$nm_latihan, 'sl_latihan'=> $sl_latihan,'id_bahasa'=>$id_bahasa, 'srcCode'=> $srcCode,'gambar'=> $gambar,'created_at' => $current_time,'updated_at' => $current_time ]);

    }
}
