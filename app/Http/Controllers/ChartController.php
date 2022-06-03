<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    
    public function Chart_Avg()
    {

        $users = Report::select(DB::raw("AVG(sum_point) as count"), 
        DB::raw("MONTHNAME(date_report) as month_name"),
        DB::raw("SUM(sum_point) as total"))
        ->whereYear('date_report', date('Y'))
        ->groupBy(DB::raw("Month(date_report)"))
        ->pluck('count', 'month_name');

        $labels = $users->keys();
        $data = $users->values();
  
        // return   $users;
              
        return view('chart.avg', compact('labels', 'data'));
        

    }


}
