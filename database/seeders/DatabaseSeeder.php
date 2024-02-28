<?php

namespace Database\Seeders;
use App\Models\Categories;
use App\Models\Products;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $products = [
            ['name' => 'Kopi', 'stock' => 100],
            ['name' => 'Teh', 'stock' => 100],
            ['name' => 'Pasta Gigi', 'stock' => 100],
            ['name' => 'Sabun Mandi', 'stock' => 100],
            ['name' => 'Sampo', 'stock' => 100],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }

        $categories = [
            ['name' => 'Konsumsi'], ['name' => 'Pembersih']
        ];

        foreach ($categories as $category) {
            Categories::create($category);
        }
    }
}
