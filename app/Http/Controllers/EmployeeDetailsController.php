<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeDetails;

class EmployeeDetailsController extends Controller
{
    public function EmployeeDetails(Request $request)
    {

        $em_id = $request->em_id;

        $employee = EmployeeDetails::where('id',$em_id)
        ->first();

        return view('employee_details')
             ->with('employees',$employee);
        // return $employee;
    }

}



