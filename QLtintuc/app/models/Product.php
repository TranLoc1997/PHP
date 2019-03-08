<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table ='Ql-product';
	protected $primaryKey ='prod_id'; 
	protected $guarded =[];

	public function category(){
    	return $this->hasMany('App\models\category');
    }
}
