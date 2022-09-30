<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AttributeSeeder::class);
        $this->call(BayTypeSeeder::class);
        $this->call(EquipmentOutSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(PersonResponsiblesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RoleSeeder::class);
      
    }
}
