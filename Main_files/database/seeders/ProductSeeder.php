<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('products')->insert([
            'name' => 'Amatriciana',
            'guid' => 'amatriciana',
            'recipes' => 'pomodoro, mozzarella, pancetta stufata, cipolla, formaggio grattugiato',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FProducts%2Famatriciana.jpg?alt=media&token=b65e0137-ba35-434a-8541-4c0b8b8fa073',
            'price' => 6.50,
            'maxi_price' => 9.00,
            'reduction_price' => 0.00,
            'info' => '',
            'category_guid' => 'le-classiche',
            'variant_category_guid' => 'varianti-pizze',
            'dough_category_guid' => 'impasti-pizze',
            'warehouse' => '',
            'iva' => '12345678',
            'department' => '',
        ]);

        DB::table('products')->insert([
            'name' => '4 Formaggi',
            'guid' => '4-formaggi',
            'recipes' => 'pomodoro, mozzarella, gorgonzola, asiago, formaggio grattugiato',
            'img' => '',
            'price' => 6.50,
            'maxi_price' => 9.00,
            'reduction_price' => 0.00,
            'info' => '',
            'category_guid' => 'le-classiche',
            'variant_category_guid' => 'varianti-pizze',
            'dough_category_guid' => 'impasti-pizze',
            'warehouse' => '',
            'iva' => '12345678',
            'department' => '',
        ]);

        DB::table('products')->insert([
            'name' => 'Mozzarella',
            'guid' => 'mozzarella',
            'recipes' => '',
            'img' => '',
            'price' => 1.00,
            'maxi_price' => 1.50,
            'reduction_price' => 0.00,
            'info' => '',
            'category_guid' => 'varianti-pizze',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
            'warehouse' => '',
            'iva' => '12345678',
            'department' => '',
        ]);

        DB::table('products')->insert([
            'name' => 'Funghi',
            'guid' => 'funghi',
            'recipes' => '',
            'img' => '',
            'price' => 0.50,
            'maxi_price' => 1.00,
            'reduction_price' => 0.00,
            'info' => '',
            'category_guid' => 'varianti-pizze',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
            'warehouse' => '',
            'iva' => '12345678',
            'department' => '',
        ]);

        DB::table('products')->insert([
            'name' => 'Kamut',
            'guid' => 'kamut',
            'recipes' => '',
            'img' => '',
            'price' => 2.00,
            'maxi_price' => 3.00,
            'reduction_price' => 0.00,
            'info' => '',
            'category_guid' => 'impasti-pizze',
            'variant_category_guid' => '',
            'dough_category_guid' => '',
            'warehouse' => '',
            'iva' => '12345678',
            'department' => '',
        ]);
    }
}
