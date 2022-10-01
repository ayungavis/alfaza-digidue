<?php

namespace App\Http\Controllers;

use App\BayType;
use App\Models\Attributes;
use App\Models\EquipmentOut;
use App\Models\Location;
use App\Models\Month;
use App\Models\Schedule;
use Attribute;
use Illuminate\Http\Request;
use DataTables;
use Exception;

class ScheduleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dataSchedule(){
        $schedule = Schedule::with('bay_type','equipment_out','location','month');
        if (request()->ajax()) {
            return Datatables::of($schedule)
            ->addIndexColumn()
            ->addColumn('approve', function ($schedule) {
                if ($schedule->approve_id == 1) {
                    $btn = '<a class="btn btn-sm btn-danger" >Disetujui</a>';;
                }else if($schedule->approve_id == 3){
                    $btn = '<button id="changestatus" class="btn btn-sm btn-danger" data-id="1">Setujui</button>';;
                    $btn .= '<button id="changestatus" class="btn btn-sm btn-danger" data-id="2">Tolak</button>';;
                } else {
                    $btn = '<a class="btn btn-sm btn-danger" >Ditolak</a>';;
                }
                return $btn;
            })
            ->addColumn('action', function ($schedule) {
                $button = '<button id="delete" class="btn  btn-danger" data-id="' . $schedule->id . '">Delete</button>';
                return $button;
            })
            ->rawColumns(['approve','action'])
            ->make(true);
        }
        return view('admin.schedule.index')->with('title', 'Jadwal');

    }
}
