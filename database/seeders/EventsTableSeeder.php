<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    // HOW TO RUN SEEDING
    // php artisan db:seed --class=EventsTableSeeder

    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 50; $i++){
            DB::table('events')->insert([
    		    'title' => $faker->sentence,
       	    ]);
        }
    }
}
