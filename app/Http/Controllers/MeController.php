<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Auth()
    {
        $data_me = Auth::user();

        return $data_me;
        
    }
}
