<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TicketsTableSeeder extends Seeder
{
    // HOW TO RUN SEEDING
    // LIMIT_DATA=10 EVENT_ID=5 php artisan db:seed --class=TicketsTableSeeder
    
    public function run()
    {
        $faker = Faker::create('id_ID');

        $limit = env('LIMIT_DATA', 1);
        $event_id = env('EVENT_ID', 1);

        for($i = 1; $i <= $limit; $i++){

            $random_alpha_numeric = strtoupper(substr(md5(uniqid(rand(), true)), 0, 6));
            $id_ticket = "DTK{$random_alpha_numeric}";

            DB::table('tickets')->insert([
    		    'id' => $id_ticket,
    		    'event_id' => $event_id,
       	    ]);
        }
    }
}
