<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            [
                'title' => '2021 Szeptember 28 - Debrecen',
                'date' => '2021-09-28',
                'address' => 'Debrecen - Csapó u. 27',
                'place_name' => 'RONCSBÁR',
                'link' => null,
                'ticket' => 'somewhere',
                'start_time' => null,
                'additional_info' => null,
            ],
            [
                'title' => '2022 Oktober 28 - Debrecen',
                'date' => '2022-10-28',
                'address' => 'Debrecen - Noway u. 27',
                'place_name' => 'RONCSBÁR',
                'link' => 'https://google.com',
                'ticket' => null,
                'start_time' => null,
                'additional_info' => 'info',
            ],
            [
                'title' => '2021 December 24 - Debrecen',
                'date' => '2021-12-24',
                'address' => 'Debrecen - Something u. 27',
                'place_name' => 'RONCSBÁR',
                'link' => null,
                'ticket' => null,
                'start_time' => null,
                'additional_info' => null,
            ],
            [
                'title' => '2018 November 09 - Debrecen',
                'date' => '2018-11-09',
                'address' => 'Debrecen - Kossuth Tér',
                'place_name' => 'Nagytemplom előtt',
                'link' => null,
                'ticket' => null,
                'start_time' => null,
                'additional_info' => null,
            ],
            [
                'title' => '2018 Augusztus 18 - Debrecen',
                'date' => '2018-08-18',
                'address' => 'Debrecen - Kossuth L. Utca 1',
                'place_name' => 'IPK Debrecen',
                'link' => null,
                'ticket' => null,
                'start_time' => null,
                'additional_info' => null,
            ],
            [
                'title' => '2018 Szeptember 14 - Békéscsaba',
                'date' => '2018-09-14',
                'address' => 'Békéscsaba - Szent István Tér 3',
                'place_name' => 'Narancs Rock Cafe',
                'link' => null,
                'ticket' => null,
                'start_time' => null,
                'additional_info' => null,
            ],
        ]);
    }
}
