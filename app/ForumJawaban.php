<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumJawaban extends Model
{
    // 
    protected $table = 'forumjawaban';

    protected $fillable = [
        'id_forum', 'id_user', 'jawaban'
    ];
    protected $dates = [
        'created_at','update_at'
    ];
}

