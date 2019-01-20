<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 70; $i++) {
            \App\Model\Product::create([
                'category_id' => rand(1, 10),
                'supplier_id' => rand(1, 10),
                'name' => $faker->name,
                'image' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
                'video' => $faker->url,
                'overview' => $faker->realText($maxNbChars = 200, $indexSize = 1),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'price' => rand(1000, 99999),
                'star' => rand(1,5),
            ]);
        }

    }
}
