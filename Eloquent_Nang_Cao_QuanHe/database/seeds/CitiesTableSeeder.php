<?php

use Illuminate\Database\Seeder;
use App\Customer;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $city = new City();
  $city->id = 1;
  $city->name = 'Hà Nội';
  $city->save();

  $city = new City();
  $city->id = 2;
  $city->name = 'Hồ Chí Minh';
  $city->save();

  $city = new City();
  $city->id = 3;
  $city->name = 'Hải Phòng';
  $city->save();

  $city = new City();
  $city->id = 4;
  $city->name = 'Hải Dương';
  $city->save();
    }
}
