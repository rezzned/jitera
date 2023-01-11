<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Users::create([
            'name' => 'Graham',
            'username' => 'Bret',
            'email' => 'Sincere@april.biz',
            'phone' => '1-770-736-8031 x56442',
            'website' => 'hildegard.org',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Users::create([
            'name' => 'Leanne',
            'username' => 'Bret',
            'email' => 'Sincere@april.biz',
            'phone' => '1-770-736-8031 x56442',
            'website' => 'hildegard.org',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
        Users::create([
            'name' => 'Graham2',
            'username' => 'Bret',
            'email' => 'Sincere@april.biz',
            'phone' => '1-770-736-8031 x56442',
            'website' => 'hildegard.org',
            'created_at' => '2023-01-11 19:41:47',
            'updated_at' => '2023-01-11 19:41:47'
        ]);
    }
}
