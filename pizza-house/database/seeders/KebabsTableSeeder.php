<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KebabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,3) as $index){
            DB::table('kebabs')->insert([
                'type' => $faker->word,
                'name' => $faker->name,
                'toppings' => json_encode([
                    $faker->randomElement(
                         [
                           "mushroom",
                           "garlic", 
                           "olive"
                         ],
                         [
                            "garlic", 
                            "olive"
                          ]
                      )
                 ])
            
            ]);
        }
    }
}
