<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table ='QL-category';
    protected $primaryKey ='id'; 
    protected $guarded =[];  
    public function Product(){
    	return $this->belongsTo('App\models\Product');
    }
}
