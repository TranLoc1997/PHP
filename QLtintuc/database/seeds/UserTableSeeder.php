<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
    			'email'=>'vanloc101997@gmail.com',
    			'password'=>bcrypt('12345'),
    			'Lever'=>1

    		],
    		[
    			'email'=>'vanloc10101997@gmail.com',
    			'password'=>bcrypt('12345'),
    			'Lever'=>1
    		],
    	];	
    	DB::table('QL_user')->insert($data);
    }
}
