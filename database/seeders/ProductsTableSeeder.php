<?php

namespace Database\Seeders;

// use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Seeding Product 1',
                'price' => 100000,
                'stock' => 50,
                'description' => 'Description for product 1.',
                'image' => 'https://via.placeholder.com/540',
                'dimensions' => json_encode(['width' => 50, 'height' => 30]),
                'is_featured' => 1, // 1 for featured
            ],
            [
                'name' => 'Seeding Product 2',
                'price' => 150000,
                'stock' => 30,
                'description' => 'Description for product 2.',
                'image' => 'https://via.placeholder.com/540',
                'dimensions' => json_encode(['width' => 60, 'height' => 40]),
                'is_featured' => 0, // 0 for not featured
            ],
            [
                'name' => 'Seeding Product 3',
                'price' => 200000,
                'stock' => 20,
                'description' => 'Description for product 3.',
                'image' => 'https://via.placeholder.com/540',
                'dimensions' => json_encode(['width' => 70, 'height' => 50]),
                'is_featured' => 1, // 1 for featured
            ],
            // Add more products as needed
        ]);
    }
}
