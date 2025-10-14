<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            ['color' => 'Black', 'quantity' => 2, 'created_at' => '2025-10-01', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 1, 'created_at' => '2025-10-02', 'status' => 'pending', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 3, 'created_at' => '2025-10-03', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 1, 'created_at' => '2025-10-04', 'status' => 'cancelled', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 4, 'created_at' => '2025-10-05', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 2, 'created_at' => '2025-10-06', 'status' => 'pending', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 5, 'created_at' => '2025-10-07', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 1, 'created_at' => '2025-10-08', 'status' => 'pending', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 2, 'created_at' => '2025-10-09', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 3, 'created_at' => '2025-10-10', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 4, 'created_at' => '2025-10-11', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 3, 'created_at' => '2025-10-12', 'status' => 'pending', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 1, 'created_at' => '2025-10-13', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 5, 'created_at' => '2025-10-14', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 2, 'created_at' => '2025-10-15', 'status' => 'pending', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 2, 'created_at' => '2025-10-16', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 1, 'created_at' => '2025-10-17', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 4, 'created_at' => '2025-10-18', 'status' => 'pending', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 3, 'created_at' => '2025-10-19', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 5, 'created_at' => '2025-10-20', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 3, 'created_at' => '2025-10-21', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 4, 'created_at' => '2025-10-22', 'status' => 'pending', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 1, 'created_at' => '2025-10-23', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 2, 'created_at' => '2025-10-24', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 3, 'created_at' => '2025-10-25', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 1, 'created_at' => '2025-10-26', 'status' => 'pending', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 2, 'created_at' => '2025-10-27', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 4, 'created_at' => '2025-10-28', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 3, 'created_at' => '2025-10-29', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 2, 'created_at' => '2025-10-30', 'status' => 'pending', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 5, 'created_at' => '2025-10-31', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 1, 'created_at' => '2025-11-01', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 2, 'created_at' => '2025-11-02', 'status' => 'pending', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 3, 'created_at' => '2025-11-03', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 4, 'created_at' => '2025-11-04', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 2, 'created_at' => '2025-11-05', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 3, 'created_at' => '2025-11-06', 'status' => 'pending', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 1, 'created_at' => '2025-11-07', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 5, 'created_at' => '2025-11-08', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 2, 'created_at' => '2025-11-09', 'status' => 'completed', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 3, 'created_at' => '2025-11-10', 'status' => 'pending', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 1, 'created_at' => '2025-11-11', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 2, 'created_at' => '2025-11-12', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 3, 'created_at' => '2025-11-13', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 4, 'created_at' => '2025-11-14', 'status' => 'pending', 'user_id' => 5],
            ['color' => 'Black', 'quantity' => 2, 'created_at' => '2025-11-15', 'status' => 'completed', 'user_id' => 1],
            ['color' => 'Silver', 'quantity' => 3, 'created_at' => '2025-11-16', 'status' => 'completed', 'user_id' => 2],
            ['color' => 'Grey', 'quantity' => 1, 'created_at' => '2025-11-17', 'status' => 'completed', 'user_id' => 3],
            ['color' => 'Blue', 'quantity' => 2, 'created_at' => '2025-11-18', 'status' => 'completed', 'user_id' => 4],
            ['color' => 'White', 'quantity' => 5, 'created_at' => '2025-11-19', 'status' => 'completed', 'user_id' => 5],
        ]);
    }
}
