<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function fuel()
    {
        return $this->belongsTo('App\Fuel');
    }

}
