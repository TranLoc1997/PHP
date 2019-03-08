<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
  {

      $dataArray = [];
      for ($i = 0; $i < 20; $i++) {
          array_push($dataArray, [
              'title' => str_random(10),
              'content' => str_random(100),
              'image' => str_random(10).'png',
              'due_date' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
              'created_at' => date('Y-m-d H:i:s')
          ]);
      }
      DB::table('task')->insert($dataArray);
  }
}
