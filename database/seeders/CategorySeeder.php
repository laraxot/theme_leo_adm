<?php

namespace Database\Seeders;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Pizze',
            'guid' => 'pizze',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FSuperiorCategory%2Fpizza.png?alt=media&token=7360e33a-bf57-4c87-b66f-907af7f3f128',
            'superior_category_guid' => 'root',
        ]);

        DB::table('categories')->insert([
            'name' => 'Panini',
            'guid' => 'panini',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FSuperiorCategory%2Fhamburger2.png?alt=media&token=8ace6587-d4da-4182-b5e7-7ead82dacd3e',
            'superior_category_guid' => 'root',
        ]);

        DB::table('categories')->insert([
            'name' => 'Snack',
            'guid' => 'snack',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FSuperiorCategory%2Ffrench-fries.png?alt=media&token=f95ad5a0-d398-4364-b06c-6363ef7b003a',
            'superior_category_guid' => 'root',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bibite',
            'guid' => 'bibite',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FSuperiorCategory%2Fbibita.png?alt=media&token=2dd79fab-0ba8-4ed1-ac45-286d6ebb3ab3',
            'superior_category_guid' => 'root',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dessert',
            'guid' => 'dessert',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FSuperiorCategory%2Fcupcake.png?alt=media&token=c96e1751-c570-4acb-8779-1301df9b9d7c',
            'superior_category_guid' => 'root',
        ]);

        DB::table('categories')->insert([
            'name' => 'Le Classiche',
            'guid' => 'le-classiche',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FCategory%2Fcaprese.jpg?alt=media&token=0897ba60-9158-4ac2-8b57-bd4eb52f3db7',
            'superior_category_guid' => 'pizze',
        ]);

        DB::table('categories')->insert([
            'name' => 'Le Speciali',
            'guid' => 'le-speciali',
            'img' => 'https://firebasestorage.googleapis.com/v0/b/fastorderlaravel.appspot.com/o/Image%2FCategory%2Faurora.jpg?alt=media&token=738a1ee9-9385-42f4-bef0-dae5b584cab7',
            'superior_category_guid' => 'pizze',
        ]);
    }
}
