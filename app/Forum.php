<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    protected $table = 'forum';

    protected $fillable = [
        'judul_forum', 'isi_forum', 'kategori','id_user','created_at','update_at'
    ];
}
