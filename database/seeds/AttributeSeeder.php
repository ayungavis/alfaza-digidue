<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            'equipment_out_id' => 1,
            'name' => '03'
        ]);

        DB::table('attributes')->insert([
            'equipment_out_id' => 1,
            'name' => '05'
        ]);
    }
}
