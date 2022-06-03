<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Employee;
use View;
use Session;
use Auth;

class EmployeeController extends Controller
{
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
    
            return redirect()->route('employee_add')
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
    
            return redirect()->route('employee_add')
            ->with('success','ลบข้อมูลเรียบร้อย');
          
          } catch (\Exception $e) {
              return $e->getMessage();
          }
        
    }


   



    
}
