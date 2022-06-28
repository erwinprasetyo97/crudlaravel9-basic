<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = faker::create();
        return [
            'name'=> $faker->name(),
            'sku'=> $faker->name(),
            'category'=> $faker->words(),
            'price'=> $faker->randomNumber(5, true),
            'updated_at'=> $faker->time(),
            'created_at'=> $faker->time()
        ];
    }
}
