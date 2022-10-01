<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonResponsiblesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_responsibles')->insert([
            'name' => 'M.UPT'
        ]);

        DB::table('person_responsibles')->insert([
            'name' => 'M. UP2B/UIP2B'
        ]);

        DB::table('person_responsibles')->insert([
            'name' => 'M. UP2D'
        ]);

        DB::table('person_responsibles')->insert([
            'name' => 'PLN Proyek'
        ]);

        DB::table('person_responsibles')->insert([
            'name' => 'Pihak Luar'
        ]);
    }
}
