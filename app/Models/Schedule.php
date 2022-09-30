<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table ='schedules';

    protected $fillable =[
        'no',
        'location_id',
        'desc_job',
        'voltage',
        'bay_type_id',
        'equipment_out_id',
        'attribute_id',
        'person_responsible_id',
        'start_date',
        'end_date',
        'start_hours',
        'end_hours',
        'note',
        'notif',
        'approve_id'
    ];
}
