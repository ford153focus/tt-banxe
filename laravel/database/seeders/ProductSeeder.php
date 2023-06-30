<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->text(10),
                'description' => $faker->realText(),
                'price' => $faker->randomFloat(2, 0, 999999),
            ]);
        }
    }
}
