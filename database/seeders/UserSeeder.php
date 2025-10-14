<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Abubakar', 'email' => 'abubakar@gmail.com', 'contact' => '03122082355', 'city' => 'Karachi'],
            ['name' => 'Hamza', 'email' => 'hamza@gmail.com', 'contact' => '03214567890', 'city' => 'Lahore'],
            ['name' => 'Ahsan', 'email' => 'ahsan@gmail.com', 'contact' => '03319876543', 'city' => 'Multan'],
            ['name' => 'Mehwish', 'email' => 'mehwish@gmail.com', 'contact' => '03451234567', 'city' => 'Islamabad'],
            ['name' => 'Muskan', 'email' => 'muskan@gmail.com', 'contact' => '03007894561', 'city' => 'Faisalabad'],
        ]);
    }
}
