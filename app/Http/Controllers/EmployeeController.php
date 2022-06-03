<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    function index()
    {
        $employee=Employee::all();
        return view('employee'); 
    }
}
