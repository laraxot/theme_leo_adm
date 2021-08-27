<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('informations')->insert([
            'store_name' => 'Al Basilico',
            'store_email' => 'info@albasilico.it',
            'store_address' => 'Via Berna, 2, 30030 Martellago VE',
            'store_phone_number' => '351 788 6826',
            'store_maps_url' => 'https://g.page/albasilico-martellago?share',
            'store_maps_api' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBB1FSN_jmMPxSmVs0Nk57BJ-yLCAXKzLY&amp;q=Via+Berna%2C+2%2C+30030+Martellago+VE&amp;zoom=15',
            'store_p_iva' => '12345678',
            'store_logo' => '',
        ]);
    }
}
