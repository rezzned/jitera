<?php

namespace Database\Seeders;

use App\Models\Follow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Follow::create([
            'user_id' => 1,
            'follow_user_id' => 2,
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Follow::create([
            'user_id' => 1,
            'follow_user_id' => 3,
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Follow::create([
            'user_id' => 3,
            'follow_user_id' => 1,
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Follow::create([
            'user_id' => 3,
            'follow_user_id' => 2,
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
    }
}
