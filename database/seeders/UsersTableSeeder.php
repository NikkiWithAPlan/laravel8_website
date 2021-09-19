<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name' => 'Test',
                'email' => 'test@gmail.com',
                'password' => '$2y$10$0Smds5W07ZJCz0rpRpIztuSih9g58LLIwWSI6tPZd2H915/bBrWXq'
            ],
        ]);
    }
}
