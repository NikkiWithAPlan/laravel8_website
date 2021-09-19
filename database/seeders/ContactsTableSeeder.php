<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BandDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                'title' => 'DC/79 BAND Debrecen',
                'mobile' => '+36-70-633-4466',
                'email' => 'dc79@dc79.net'
            ]
            );
    }
}
