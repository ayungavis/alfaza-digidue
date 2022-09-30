<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'GI 150KV PROBOLINGGO'
        ]);

        DB::table('locations')->insert([
            'name' => 'GI 150KV KIS'
        ]);
    }
}
