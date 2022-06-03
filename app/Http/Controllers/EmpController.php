<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;

class EmpController extends Controller
{
    public function Emp(Request $request)
    {

        $employee = Emp::All();

        return view('main')
             ->with('employees', $employee);
    

    }
}
