<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Employee;
use View;
use Session;
use Carbon\Carbon;

class ReportController extends Controller
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

    public function Report(Request $request)
    {
        $employee_ids = $request->employee_id;

        $employees = Employee::where('id',$employee_ids)
        ->first();


        if($employees){
            return view('report')
            ->with('employee_id', $employee_ids)
            ->with('employee', $employees);
        }else{
            return view('auth.login')
            ->with('error', 'ไม่พบรหัสพนักงานในระบบไม่สามารถประเมินได้');
        }

    }

    public function SaveReport(Request $request)
    {
        
        $employee_id = $request->employee_id;
        $r_lose = $request->r_lose;
        $r_bye = $request->r_bye;
        $r_late = $request->r_late;
        $r_work = $request->r_work;
        $r_dress = $request->r_dress;
        $r_clean = $request->r_clean;
        $r_meeting = $request->r_meeting;
        $r_partic = $request->r_partic;
        $r_performance = $request->r_performance;
        $r_ot = $request->r_ot;

        $employees = Report::where('id_em',$employee_id)
        ->orderBy('id', 'desc')
        ->whereDate('created_at', '=', $this->date)
        ->count();

        if($employees > 0){

            return redirect()
            ->back()
            ->with('error', 'วันนี้พนักงานดังกล่าวได้รับการประเมินแล้ว');

        }else{

        $Report = new Report;
        $Report->id_user = 8;
        $Report->id_em = $employee_id;
        $Report->r_lose = $r_lose;
        $Report->r_bye = $r_bye;
        $Report->r_late = $r_late;
        $Report->r_work = $r_work;
        $Report->r_dress = $r_dress;
        $Report->r_clean = $r_clean;
        $Report->r_meeting = $r_meeting;
        $Report->r_partic = $r_partic;
        $Report->r_performance = $r_performance;
        $Report->r_ot = $r_ot;
        $Report->sum_point = $r_lose+$r_bye+$r_late+$r_work+$r_dress+$r_clean+$r_meeting+$r_partic+$r_performance+$r_ot;
        $Report->save();
        

        return redirect()->route('main')
        ->with('success','บันทึกข้อมูลเรียบร้อย');

        }
    }


    public function Report_Employees(Request $request)
    {
      
        $employees_id = $request->employees_id;

        $employees = Employee::where('id',$employees_id)
        ->first();

        $fetch_em_id = $employees->id;

        $employee_report = Report::where('id_em',$fetch_em_id)
        ->get();


        if($employees){
            return view('employees.employees')
            ->with('employee_reports',  $employee_report)
            ->with('employee', $employees);
        }else{
            return view('auth.login')
            ->with('error', 'ไม่พบรหัสพนักงานในระบบไม่สามารถประเมินได้');
        }
    }



    

}
