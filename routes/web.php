<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\EmployeeController;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'home_login'])->name('welcome');
Route::get('/home', [App\Http\Controllers\EmpController::class, 'Emp'])->name('main');
Route::get('/employee/add', [App\Http\Controllers\EmployeeController::class, 'Employee_Add'])->name('employee_add');
Route::post('/employee/add/send', [App\Http\Controllers\EmployeeController::class, 'Employee_Send'])->name('employee_send');
Route::get('/employee/delete/{employees_id}', [App\Http\Controllers\EmployeeController::class, 'Employee_Delete'])->name('employee_delete');
Route::get('/report/employees/{employees_id}', [App\Http\Controllers\ReportController::class, 'Report_Employees'])->name('report_employees');
Route::get('/analysis/day', [App\Http\Controllers\AnalysisController::class, 'Analysis_Day'])->name('analysis_day');
Route::get('/analysis/month', [App\Http\Controllers\AnalysisController::class, 'Analysis_Month'])->name('analysis_month');
Route::get('/chart/month', [App\Http\Controllers\ChartController::class, 'Chart_Month'])->name('chart_month');
Route::get('/chart/avg', [App\Http\Controllers\ChartController::class, 'Chart_Avg'])->name('chart_avg');
Route::get('/chart/day', [App\Http\Controllers\ChartController::class, 'Chart_Day'])->name('chart_day');

Route::get('/report/send/{employee_id}', [App\Http\Controllers\ReportController::class, 'Report'])->name('report_send');
Route::post('/report/send/save', [App\Http\Controllers\ReportController::class, 'SaveReport'])->name('savereport');
Route::get('/employee_details/{em_id}', [App\Http\Controllers\EmployeeDetailsController::class, 'EmployeeDetails']);
Route::get('/me', [App\Http\Controllers\MeController::class, 'Auth']);
Route::get('/reports',[App\Http\Controllers\ReportsController::class,'index']);
Route::get('/employee',[App\Http\Controllers\EmployeeController::class,'index']);











Route::middleware(['auth', 'user-access:head_work'])->group(function () { //role: 0

    
});
  
Route::middleware(['auth', 'user-access:hr'])->group(function () { //role: 1

 

});
  

Route::middleware(['auth', 'user-access:manager'])->group(function () { //role: 2


});
