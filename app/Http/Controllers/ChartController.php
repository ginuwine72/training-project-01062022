<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chart;
use Illuminate\Support\Facades\DB;


class ChartController extends Controller
{
        /**
         * Write code on Method
         *
         * @return response()
         */
        public function Chart_Month()
        {
            $Chart = Chart::select(DB::raw("SUM(sum_point) as count"),
             DB::raw("MONTHNAME(date_report) as month_name"),
             DB::raw("SUM(sum_point) as total"))
                        ->whereYear('date_report', date('Y'))
                        ->groupBy(DB::raw("Month(date_report)"))
                        ->pluck('count', 'month_name');
     
            $labels = $Chart->keys();
            $data = $Chart->values();


            //   return $Chart;



            return view('chart.month', compact('labels', 'data'));
        }
}
