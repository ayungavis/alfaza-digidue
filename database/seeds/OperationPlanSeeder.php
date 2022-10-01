<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperationPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operation_plans')->insert([
            'name' => 'ROB',
        ]);

        DB::table('operation_plans')->insert([
            'name' => 'ROM',
        ]);

        DB::table('operation_plans')->insert([
            'name' => 'ROH',
        ]);
    }
}
