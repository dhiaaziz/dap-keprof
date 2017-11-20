<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SubMateri extends Model
{
    protected $table = 'submateri';

    protected $fillable = [
        'nm_Sub', 'isi_Sub', 'gmbr_Sub','id_materi',
    ];

    public function addedSub($nm_Sub,$isi_Sub,$gmbrSub,$id_materi){

        $current_time = Carbon::now()->toDateTimeString();
        $add = \DB::table('submateri')
        ->insert(['nm_Sub'=>$nm_Sub, 'isi_Sub'=> $isi_Sub, 'gmbr_Sub'=> $gmbrSub, 'id_materi'=> $id_materi,'created_at' => $current_time,'updated_at' => $current_time]);

        return $add;

    }
}
