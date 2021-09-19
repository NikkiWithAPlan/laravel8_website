<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BandsTableSeeder::class);
        $this->call(BandDetailsTableSeeder::class);
        $this->call(ShowsTableSeeder::class);
        $this->call(SignaturesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(SponsorsTableSeeder::class);
    }
}
