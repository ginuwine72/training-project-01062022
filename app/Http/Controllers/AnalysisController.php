<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Employee;
use View;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnalysisController extends Controller
{
    
    protected $date;

    public function __construct()
    {
        $this->date =  date('Y-m-d');
        // $this->middleware('auth');
    }

    
    public function Analysis_Day()
    {

         $Analysis_Day = Report::
         leftJoin('employee', 'reports.id_em', '=', 'employee.id')
         ->whereDate('reports.date_report', '=', $this->date)
         ->get();

        

       return $Analysis_Day;

       return view('analysis.analysis_day')
       ->with('analysis_days',  $Analysis_Day);

    }

}
