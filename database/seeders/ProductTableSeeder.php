<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // to run the seeder v
        // php artisan db:seed -class=ProductTableSeeder

        // Deleting existing data in the table
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->name(),
                'price' => $faker->randomDigit(),
                'imagePath' => $faker->imageUrl(),
                'description' => $faker->text(),
                'category' => "categoryName"
            ]);
        }
    }
}
