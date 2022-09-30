<?php

namespace App\Http\Controllers;

use App\BayType;
use App\Models\Attributes;
use App\Models\EquipmentOut;
use App\Models\Location;
use Attribute;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $location= Location::all();
    }
}
