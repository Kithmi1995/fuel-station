<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuelPurchase extends Model
{
    protected $guarded = ['id'];

    protected $table = 'fuel_purchases';

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function fuels()
    {
        return $this->belongsTo('App\Fuel');
    }


}
