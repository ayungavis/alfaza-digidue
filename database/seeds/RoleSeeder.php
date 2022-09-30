<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Super Admin',
        ]);

        DB::table('roles')->insert([
            'name' => 'PIC UPT',
        ]);

        DB::table('roles')->insert([
            'name' => 'PIC ULTG',
            
        ]);
    }
}
