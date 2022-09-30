<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'sa@pln.com',
            'role_id' => 1,
            'password' => Hash::make('pln123')
        ]);

        DB::table('users')->insert([
            'name' => 'PIC UPT',
            'email' => 'picupt@pln.com',
            'role_id' => 2,
            'password' => Hash::make('pln123')
        ]);

        DB::table('users')->insert([
            'name' => 'PIC ULTG',
            'email' => 'picultg@pln.com',
            'role_id' => 3,
            'password' => Hash::make('pln123')
        ]);

      

       
    }
}
