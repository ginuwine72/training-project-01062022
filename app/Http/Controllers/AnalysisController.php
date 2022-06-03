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

       $Analysis_Day =  DB::query()
            ->select(
                'r.id',
                'r.id_user',
                'r.id_em',
                'r.date_report as date_report_last',
                'e.fullname',
                'e.dep',
            )
            ->selectRaw('SUM(r.sum_point) AS sum_point_day') 
            ->from('reports', 'r')
            ->join('employee as e', 'r.id_em', 'e.id')
            ->whereDate('r.date_report', '=', $this->date)
            ->groupBy('e.id')
            ->get();

     
       return view('analysis.analysis_day')
       ->with('analysis_days',  $Analysis_Day);

    }


    public function Analysis_Month()
    {

        $Analysis_Month = Report::select(DB::raw("SUM(sum_point) as count"), 
        DB::raw("MONTHNAME(date_report) as month_name"))
        ->whereYear('date_report', date('Y'))
        ->groupBy(DB::raw("Month(date_report)"))
        ->get('count', 'month_name');
    
        $labels = $Analysis_Month->keys();
        $data = $Analysis_Month->values();

        // return $Analysis_Month;

       return view('analysis.analysis_month')
       ->with('analysis_months',  $Analysis_Month);

    }


}
