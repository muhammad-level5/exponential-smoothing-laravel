<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SahamData extends Model
{

    protected $table = 'saham_datas';

    protected $fillable = [
        'date', 'open', 'high',
        'low', 'close', 'volume'
    ];

    protected $hidden = [

    ];
}
