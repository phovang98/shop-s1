<?php

use Illuminate\Database\Seeder;

class ProductGalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $listProducts = \App\Model\Product::all();
        foreach ($listProducts as $item)
        {
            $numberImg = rand(3,4);
            for($i = 0; $i < $numberImg; $i++) {
                \App\Model\ProductGallery::create([
                    'product_id' => $item->id,
                    'title' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                    'image' => $faker->imageUrl($width = 640, $height = 480, 'fashion'),
                    'alt' => $faker->realText($maxNbChars = 50, $indexSize = 1),
                ]);
            }
        }
    }
}
