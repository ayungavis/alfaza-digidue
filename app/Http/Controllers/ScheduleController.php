<?php

namespace App\Http\Controllers;

use App\Models\BayType;
use App\Models\Attributes;
use App\Models\EquipmentOut;
use App\Models\Location;
use App\Models\Month;
use App\Models\Schedule;
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
                }else if($schedule->approve_id == 4){
                    $btn = '<a> - </a>';;
                    
                }
                else if($schedule->approve_id == 3){
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

    public function dataScheduleROB(){
        $schedule = Schedule::with('bay_type','equipment_out','location','month')->where('operation_plan', '=', 'ROB');
        if (request()->ajax()) {
            return Datatables::of($schedule)
            ->addIndexColumn()
            ->addColumn('approve', function ($schedule) {
                if ($schedule->approve_id == 1) {
                    $btn = '<a class="btn btn-sm btn-danger" >Disetujui</a>';;
                }else if($schedule->approve_id == 4){
                    $btn = '<a> - </a>';;
                    
                }
                else if($schedule->approve_id == 3){
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
        return view('admin.schedule.indexROB')->with('title', 'Jadwal');

    }

    public function dataScheduleROM(){
        $schedule = Schedule::with('bay_type','equipment_out','location','month')->where('operation_plan', '=', 'ROM');
        if (request()->ajax()) {
            return Datatables::of($schedule)
            ->addIndexColumn()
            ->addColumn('approve', function ($schedule) {
                if ($schedule->approve_id == 1) {
                    $btn = '<a class="btn btn-sm btn-danger" >Disetujui</a>';;
                }else if($schedule->approve_id == 4){
                    $btn = '<a> - </a>';;
                    
                }
                else if($schedule->approve_id == 3){
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
        return view('admin.schedule.indexROM')->with('title', 'Jadwal');

    }

    public function dataScheduleROH(){
        $schedule = Schedule::with('bay_type','equipment_out','location','month')->where('operation_plan', '=', 'ROH');
        if (request()->ajax()) {
            return Datatables::of($schedule)
            ->addIndexColumn()
            ->addColumn('approve', function ($schedule) {
                if ($schedule->approve_id == 1) {
                    $btn = '<a class="btn btn-sm btn-danger" >Disetujui</a>';;
                }else if($schedule->approve_id == 4){
                    $btn = '<a> - </a>';;
                    
                }
                else if($schedule->approve_id == 3){
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
        return view('admin.schedule.indexROH')->with('title', 'Jadwal');

    }

    public function showAddSchedule(){
        $locations=Location::all();
        $months=Month::all();

        return view('admin.schedule.addschedule')->with('title', 'Tambah Jadwal')->with('locations', $locations)->with('months', $months);
    }

    public function showAddBayType($id){
        $bay_type= BayType::where('location_id', $id)->pluck("name","id");

        return json_encode($bay_type);
    }

    public function showAddEquipmentOut($id){
        $equipment_out= EquipmentOut::where("bay_type_id", $id)->pluck("name","id");;

        return json_encode($equipment_out);
    }

    public function addSchedule(Request $request){
        try{
            $schedule = New Schedule();
            $schedule->month_id = $request['month_id'];
            $schedule->year= $request['year'];
            $schedule->location_id = $request['location_id'];
            $schedule->desc_job = $request['desc_job'];
            $schedule->voltage= $request['voltage'];
            $schedule->bay_type_id = $request['bay_type_id'];
            $schedule->equipment_out_id = $request['equipment_out_id'];
            $schedule->attribute = $request['attribute'];
            $schedule->person_responsibles = $request['person_responsibles'];
            $schedule->start_date= $request['start_date'];
            $schedule->end_date=$request['end_date'];
            $schedule->start_hours=$request['start_hours'];
            $schedule->end_hours= $request['end_hours'];
            $schedule->note=$request['note'];
            $schedule->approve_id= 4;
            $schedule->notif= $request['notif'];
            $schedule->operation_plan= $request['operation_plan'];
            $schedule->save();

            return response()->json([
                'status' => '200',
                'message' => 'Success add data',
            ]);

        }catch(Exception $err){
            return response()->json([
                'status' => '500',
                'error' => $err->getMessage()
            ], 500); 
        }
    }


}
