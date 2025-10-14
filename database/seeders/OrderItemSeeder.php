<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('order_items')->insert([
            ['product_id' => 1, 'order_id' => 1],
            ['product_id' => 2, 'order_id' => 2],
            ['product_id' => 3, 'order_id' => 3],
            ['product_id' => 4, 'order_id' => 4],
            ['product_id' => 5, 'order_id' => 5],
            ['product_id' => 6, 'order_id' => 6],
            ['product_id' => 7, 'order_id' => 7],
            ['product_id' => 8, 'order_id' => 8],
            ['product_id' => 9, 'order_id' => 9],
            ['product_id' => 10, 'order_id' => 10],
            ['product_id' => 1, 'order_id' => 11],
            ['product_id' => 2, 'order_id' => 12],
            ['product_id' => 3, 'order_id' => 13],
            ['product_id' => 4, 'order_id' => 14],
            ['product_id' => 5, 'order_id' => 15],
            ['product_id' => 6, 'order_id' => 16],
            ['product_id' => 7, 'order_id' => 17],
            ['product_id' => 8, 'order_id' => 18],
            ['product_id' => 9, 'order_id' => 19],
            ['product_id' => 10, 'order_id' => 20],
            ['product_id' => 1, 'order_id' => 21],
            ['product_id' => 2, 'order_id' => 22],
            ['product_id' => 3, 'order_id' => 23],
            ['product_id' => 4, 'order_id' => 24],
            ['product_id' => 5, 'order_id' => 25],
            ['product_id' => 6, 'order_id' => 26],
            ['product_id' => 7, 'order_id' => 27],
            ['product_id' => 8, 'order_id' => 28],
            ['product_id' => 9, 'order_id' => 29],
            ['product_id' => 10, 'order_id' => 30],
            ['product_id' => 1, 'order_id' => 31],
            ['product_id' => 2, 'order_id' => 32],
            ['product_id' => 3, 'order_id' => 33],
            ['product_id' => 4, 'order_id' => 34],
            ['product_id' => 5, 'order_id' => 35],
            ['product_id' => 6, 'order_id' => 36],
            ['product_id' => 7, 'order_id' => 37],
            ['product_id' => 8, 'order_id' => 38],
            ['product_id' => 9, 'order_id' => 39],
            ['product_id' => 10, 'order_id' => 40],
            ['product_id' => 1, 'order_id' => 41],
            ['product_id' => 2, 'order_id' => 42],
            ['product_id' => 3, 'order_id' => 43],
            ['product_id' => 4, 'order_id' => 44],
            ['product_id' => 5, 'order_id' => 45],
            ['product_id' => 6, 'order_id' => 46],
            ['product_id' => 7, 'order_id' => 47],
            ['product_id' => 8, 'order_id' => 48],
            ['product_id' => 9, 'order_id' => 49],
            ['product_id' => 10, 'order_id' => 50],
        ]);
    }
}
