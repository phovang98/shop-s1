<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Model\Category::create([
                'parent_id' => rand(1, 10),
                'name' => $faker->name,
                'slug' => str_slug($faker->name),
                'overview' => $faker->realText($maxNbChars = 200, $indexSize = 1),
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
            ]);
        }
    }
}
