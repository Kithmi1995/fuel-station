<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pump extends Model
{
    protected $guarded = ['id'];



    public function user(){
        return $this->belongsTo('App\User');
    }

    public function fuel()
    {
        return $this->belongsTo('App\Fuel');
    }
}
