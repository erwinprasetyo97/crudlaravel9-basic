<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        // for($i = 1; $i <=5 ; $i++) {

        //     DB::table('products')->insert([
        //         'name'=> $faker->name(),
        //         'sku'=> $faker->name(),
        //         'category'=> $faker->words(),
        //         'price'=> $faker->randomNumber(5, true),
        //         'updated_at'=> $faker->time(),
        //         'created_at'=> $faker->time()
        //     ]);
        // }

    }
}
