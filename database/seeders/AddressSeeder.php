<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Address::create([
            'users_id' => 1,
            'street' => 'Kulas Light',
            'suite' => 'Apt. 556',
            'city' => 'Gwenborough',
            'zipcode' => '92998-3874',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Address::create([
            'users_id' => 2,
            'street' => 'Kulas Light',
            'suite' => 'Apt. 556',
            'city' => 'Gwenborough',
            'zipcode' => '92998-3874',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Address::create([
            'users_id' => 3,
            'street' => 'Kulas Light',
            'suite' => 'Apt. 556',
            'city' => 'Gwenborough',
            'zipcode' => '92998-3874',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
    }
}
