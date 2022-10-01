<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BayType extends Model
{
    protected $table='bay_types';

    public function location()
    {
        return $this->belongsTo('App\Models\Location', 'location_id');
    }
}
