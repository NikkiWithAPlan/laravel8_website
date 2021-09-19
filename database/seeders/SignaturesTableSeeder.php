<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SignaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('signatures')->insert(
            [
                'name' => 'DC/79',
                'body' => 'Sziasztok! Udvozlunk mindenkit az uj VENDEGKONYV oldalunkon.\r\nKerjuk irjatok be az elmenyeiteket a koncertjeinkrol.\r\n\r\nHello to all on our GUEST BOOK ! Please write a note of your memory from our gigs..\r\nThanks: DC/79',
                'flagged_at' => null,
            ],
        );
    }
}
