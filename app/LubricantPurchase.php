<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LubricantPurchase extends Model
{

    protected $guarded = ['id'];

    protected $table = 'lubricant_purchases';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
