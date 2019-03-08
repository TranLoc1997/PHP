<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    public function customers(){
	  	return $this->hasMany('App\Customer');
	}
}
