<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/report/send/{employee_id}', [App\Http\Controllers\ReportController::class, 'Report'])->name('report');
Route::post('/report/send/save', [App\Http\Controllers\ReportController::class, 'SaveReport'])->name('savereport');
Route::get('/report/employees/{employees_id}', [App\Http\Controllers\ReportController::class, 'Report_Employees'])->name('report_employees');

Route::get('/analysis/day', [App\Http\Controllers\AnalysisController::class, 'Analysis_Day'])->name('analysis_day');
Route::get('/analysis/month', [App\Http\Controllers\AnalysisController::class, 'Analysis_Month'])->name('analysis_month');

Route::get('/chart/avg', [App\Http\Controllers\ChartController::class, 'Chart_Avg'])->name('Chart_Avg');






Route::middleware(['auth', 'user-access:head_work'])->group(function () { //role: 0

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
  
Route::middleware(['auth', 'user-access:hr'])->group(function () { //role: 1

    Route::get('/xx', function () {
        return 'xx';
    });

});
  

Route::middleware(['auth', 'user-access:manager'])->group(function () { //role: 2

    Route::get('/xxx', function () {
        return 'xxx';
    });
});