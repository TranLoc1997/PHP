<?php

use Illuminate\Database\Seeder;

class categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		[
    			'case_name'=>'iPhone',
    			'case_slug'=>str_slug('iPhone')

    		],
    		[
    			'case_name'=>'Samsung',
    			'case_slug'=>str_slug('Samsung')
    		],
    	];	
    	DB::table('QL-category')->insert($data);
 
    }
}
