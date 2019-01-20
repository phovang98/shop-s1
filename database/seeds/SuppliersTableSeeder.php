<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 10; $i++) {
            \App\Model\Supplier::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'hotline' => $faker->phoneNumber,
                'address' => $faker->address,
                'note' => $faker->realText($maxNbChars = 50, $indexSize = 1),
            ]);
        }
    }
}