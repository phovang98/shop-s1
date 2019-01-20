<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(AboutsTableSeeder::class);
         $this->call(ArticlesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(SlidesTableSeeder::class);
         $this->call(SuppliersTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ProductGalleriesTableSeeder::class);
    }
}
