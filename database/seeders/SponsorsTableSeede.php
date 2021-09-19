<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->insert([
            [
                'title' => 'Campus Radio FM90',
                'url' => 'http://www.fm90.hu/',
                'logo' => 'campusRadio_logo.jpg'
            ],
            [
                'title' => 'McCallum Bagpipes',
                'url' => 'http://www.mccallumbagpipes.com/',
                'logo' => 'mccallumbagpipes_logo.jpg'
            ],
            [
                'title' => 'Rock-Ness hanglemezbolt',
                'url' => 'https://www.facebook.com/rockness.hanglemezbolt/',
                'logo' => 'rockness_logo.jpg'
            ],
            [
                'title' => 'Hajdú-Bihari NAPLÓ',
                'url' => 'https://www.naplo.hu/',
                'logo' => 'naplo_logo.jpg'
            ],
            [
                'title' => 'Egészségedre.net',
                'url' => 'https://egeszsegedre.net/',
                'logo' => 'egeszsegedre_logo.jpg'
            ],
            [
                'title' => 'Nemzetközi Árufuvarozó',
                'url' => 'https://www.facebook.com/nyiriati',
                'logo' => 'nyiriAttile_logo.jpg'
            ],
            [
                'title' => 'Bruti',
                'url' => 'https://www.humorellato.hu/',
                'logo' => 'bruti_logo.png'
            ],
        ]);
    }
}
