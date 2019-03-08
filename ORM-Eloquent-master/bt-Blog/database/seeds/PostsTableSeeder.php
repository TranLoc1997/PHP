<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = [];
        for ($i=0; $i < 10 ; $i++) { 
        	array_push($dataArray, [
        		'title' => str_random(10),
        		'content' => str_random(100),
        		'image' => str_random(10)."png",
        		'date' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s')   
        	]);
        }
        DB::table('posts')->insert($dataArray);
    }
}
