<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EquipmentOutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV GONDANGWETAN#1'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV GONDANGWETAN#2'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV LUMAJANG#1'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV LUMAJANG#2'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV KRAKSAAN#1'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 1,
            'name' => 'T/L BAY 150KV KRAKSAAN#2'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150/20KV TRAFO#1 (HV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150/20KV TRAFO#1 (LV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150/20KV TRAFO#2 (HV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150KV/20KV TRAFO#2 (LV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150KV/20KV TRAFO#3 (HV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 2,
            'name' => 'T/L BAY 150KV/20KV TRAFO#3 (LV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 3,
            'name' => 'BUSBAR A 150KV'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 3,
            'name' => 'BUSBAR B 150KV'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 3,
            'name' => 'BAY KOPEL 150KV'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 4,
            'name' => 'T/L BAY 150KV BANGIL'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 4,
            'name' => 'T/L BAY 150KV NEW PORONG'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 4,
            'name' => 'T/L BAY 150KV NEW ASIA'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 5,
            'name' => 'T/R BAY 150/20KV TRAFO#1 (HV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 5,
            'name' => 'T/R BAY 150/20KV TRAFO#1 (LV)'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 6,
            'name' => 'BUSBAR A 150KV'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 6,
            'name' => 'BUSBAR B 150KV'
        ]);

        DB::table('equipment_outs')->insert([
            'bay_type_id' => 6,
            'name' => 'BAY KOPEL 150KV'
        ]);

        
    }
}
