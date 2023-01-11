<?php

namespace Database\Seeders;

use App\Models\Geo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Geo::create([
            'address_id' => 1,
            'lat' => '-37.3159',
            'lng' => '81.1496',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Geo::create([
            'address_id' => 2,
            'lat' => '-37.3159',
            'lng' => '81.1496',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Geo::create([
            'address_id' => 3,
            'lat' => '-37.3159',
            'lng' => '81.1496',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
    }
}
