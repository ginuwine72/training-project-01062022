<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/day_report', function (){
    return view('day_report');
});

// Route::get('/profile', function (){
//     return view('employee_details');
// });

Route::get('/day', function (){
    return App\DayReport::all();
});

Route::get('employee', function (){
    return view('employee');
});

Route::get('/reports',[App\Http\Controllers\ReportsController::class,'index']);

Route::get('/employee',[App\Http\Controllers\EmployeeController::class,'index']);

Route::middleware(['auth:sanctum'.'verified'])->get('/dashboard',function(){
    $employee=DB::table('employee')->get();
    return view('dashboard',compact('users'));
});

Route::get('/employee_details/{em_id}', [App\Http\Controllers\EmployeeDetailsController::class, 'EmployeeDetails']);

Route::get('/chart/day', [App\Http\Controllers\ChartController::class, 'Chart_Day']);

