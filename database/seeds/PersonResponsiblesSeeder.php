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
            'attribute_id' => 1,
            'name' => 'M.UPT'
        ]);

        DB::table('person_responsibles')->insert([
            'attribute_id' => 2,
            'name' => 'M. UP2B/UIP2B'
        ]);

        DB::table('person_responsibles')->insert([
            'attribute_id' => 2,
            'name' => 'M. UP2D'
        ]);

        DB::table('person_responsibles')->insert([
            'attribute_id' => 2,
            'name' => 'PLN Proyek'
        ]);

        DB::table('person_responsibles')->insert([
            'attribute_id' => 2,
            'name' => 'Pihak Luar'
        ]);
    }
}
