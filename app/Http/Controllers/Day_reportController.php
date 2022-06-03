<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DayReport;
use View;
use Session;
use Carbon\Carbon;

class Day_reportController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $date;

    public function __construct()
    {
     
        $this->date =  date('Y-m-d');
      
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return 'test';
    }

    public function DayReport(Request $request)
    {
      
        $employees_id = $request->employees_id;

        $employees = DayReport::where('id',$employees_id)
        ->first();

        $fetch_em_id = $employees->id;

        $day_report = Report::where('id_em',$fetch_em_id)
        ->get();

        return 'day_report';

    }

}
