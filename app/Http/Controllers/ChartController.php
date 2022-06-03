<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller

{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function Chart_Day()
    {


          $Chart = Report::select(DB::raw("COUNT(*) as count"), DB::raw("DAYNAME(created_at) as day_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Day(created_at)"))
                    ->pluck('count', 'day_name');
 
        $labels = $Chart->keys();
        $data = $Chart->values();

        // return $Chart;

              
        return view('chart.day', compact('labels', 'data'));
    }
}

