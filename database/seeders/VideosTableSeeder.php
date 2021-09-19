<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'title' => '2018. December - RONCSBÁR',
                'url' => 'https://youtube.com/embed/lw48GOEKqVA'
            ],
            [
                'title' => '2018. Szeptember - RONCSBÁR',
                'url' => 'https://youtube.com/embed/JHUOhOV8gVo'
            ],
            [
                'title' => '2018. Február - Kaptár',
                'url' => 'https://youtube.com/embed/-u24XLbvXj4'
            ],
        ]);
    }
}
