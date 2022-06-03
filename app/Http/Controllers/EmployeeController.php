<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use View;
use Session;
use Auth;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee'); 
    }
  
    public function Employee_Add()
    {
        return view('employee_add');
    }
  

    public function Employee_Send(Request $request)
    {
        try {
            $fullname = $request->fullname;
            $dep = $request->dep;
    
            $Employee = new Employee;
            $Employee->fullname = $fullname;
            $Employee->dep = $dep;
            $Employee->save();
    
            return redirect()->route('main')
            ->with('success','บันทึกข้อมูลเรียบร้อย');
          
          } catch (\Exception $e) {
              return $e->getMessage();
          }

    }

    public function Employee_Delete(Request $request)
    {
        try {

            $Employee = new Employee;
            $Employee = Employee::find($request->employees_id);
            $Employee->delete();
    
            return redirect()->route('main')
            ->with('error','ลบข้อมูลเรียบร้อย');
          
          } catch (\Exception $e) {
              return $e->getMessage();
          }
        
    }

}
