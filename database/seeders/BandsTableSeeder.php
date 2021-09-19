<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            [
                'member_name' => 'Szedlják János',
                'instrument' => 'Ének ( Bon Scott )'
            ],
            [
                'member_name' => 'Szólógitárost keresünk',
                'instrument' => 'Szólógitár ( Angus Young )'
            ],
            [
                'member_name' => 'Szűcs Attila',
                'instrument' => 'Dobok ( Phill Rudd )'
            ],
            [
                'member_name' => 'Basszusgitarost keresunk',
                'instrument' => 'Basszusgitár ( Cliff Williams )'
            ],
            [
                'member_name' => 'Szép Gábor',
                'instrument' => 'Ritmusgitár ( Malcolm Young )'
            ],
        ]);
    }
}
