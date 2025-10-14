<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'iPhone 15 Pro', 'price' => 280000, 'color' => 'Black', 'category' => 'Mobile', 'stock' => 10],
            ['name' => 'Samsung S24', 'price' => 260000, 'color' => 'Silver', 'category' => 'Mobile', 'stock' => 8],
            ['name' => 'HP Laptop', 'price' => 180000, 'color' => 'Grey', 'category' => 'Laptop', 'stock' => 5],
            ['name' => 'Dell Inspiron', 'price' => 165000, 'color' => 'Blue', 'category' => 'Laptop', 'stock' => 7],
            ['name' => 'Sony Headphones', 'price' => 32000, 'color' => 'Black', 'category' => 'Audio', 'stock' => 15],
            ['name' => 'Canon Camera', 'price' => 145000, 'color' => 'Black', 'category' => 'Electronics', 'stock' => 6],
            ['name' => 'Apple Watch', 'price' => 120000, 'color' => 'White', 'category' => 'Gadget', 'stock' => 9],
            ['name' => 'Logitech Mouse', 'price' => 8000, 'color' => 'Grey', 'category' => 'Accessory', 'stock' => 20],
            ['name' => 'MSI Monitor', 'price' => 85000, 'color' => 'Black', 'category' => 'Display', 'stock' => 4],
            ['name' => 'Asus Keyboard', 'price' => 12000, 'color' => 'White', 'category' => 'Accessory', 'stock' => 12],
        ]);
    }
}
