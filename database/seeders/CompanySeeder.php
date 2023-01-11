<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::create([
            'user_id' => 1,
            'name' => 'Romaguera-Crona',
            'catchPhrase' => 'Multi-layered client-server neural-net',
            'bs' => 'harness real-time e-markets',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Company::create([
            'user_id' => 2,
            'name' => 'Romaguera-Crona',
            'catchPhrase' => 'Multi-layered client-server neural-net',
            'bs' => 'harness real-time e-markets',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Company::create([
            'user_id' => 3,
            'name' => 'Romaguera-Crona',
            'catchPhrase' => 'Multi-layered client-server neural-net',
            'bs' => 'harness real-time e-markets',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
    }
}
