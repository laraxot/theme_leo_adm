<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Leonardo',
            'surname' => 'Marchesini',
            'email' => 'leonardo@gmail.com',
            'password' => '123456789',
            'phone_number' => '11111111',
            'address' => 'Via Castellana',
        ]);

    }
}
