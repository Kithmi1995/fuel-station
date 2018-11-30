<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lubricant extends Model
{
    protected $guarded = ['id'];

    //protected $table = 'lubricants';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
