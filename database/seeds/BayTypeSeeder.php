<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BayTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bay_types')->insert([
            'location_id' => 1,
            'name' => 'BAY SUTT/SUTET/SKTT'
        ]);

        DB::table('bay_types')->insert([
            'location_id' => 1,
            'name' => 'BAY TRAFO/IBT'
        ]);

        DB::table('bay_types')->insert([
            'location_id' => 1,
            'name' => 'GARDU INDUK/BUSBAR'
        ]);

        DB::table('bay_types')->insert([
            'location_id' => 2,
            'name' => 'BAY SUTT/SUTET/SKTT'
        ]);

        DB::table('bay_types')->insert([
            'location_id' => 2,
            'name' => 'BAY TRAFO/IBT'
        ]);

        DB::table('bay_types')->insert([
            'location_id' => 2,
            'name' => 'GARDU INDUK/BUSBAR'
        ]);
    }
}
