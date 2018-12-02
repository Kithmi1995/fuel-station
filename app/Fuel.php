<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    protected $guarded = ['id'];

    protected $table = 'fuel';



    public function getAge()
    {
        return Carbon::parse($this->price_date)->diffForHumans();
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function tanks()
    {
        return $this->hasMany('App\Tank');
    }

    public function fuel_purchases()
    {
        return $this->hasMany('App\FuelPurchase');
    }

}
