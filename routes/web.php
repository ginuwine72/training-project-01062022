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



Route::get('/report/{employee_id}', [App\Http\Controllers\ReportController::class, 'Report'])->name('report');
Route::post('/report/save', [App\Http\Controllers\ReportController::class, 'SaveReport'])->name('savereport');
Route::get('/report/users/{employees_id}', [App\Http\Controllers\ReportController::class, 'Report_Employees'])->name('report_employees');



Route::middleware(['auth', 'user-access:head_work'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
});
  
Route::middleware(['auth', 'user-access:hr'])->group(function () {

    Route::get('/xx', function () {
        return 'xx';
    });

});
  

Route::middleware(['auth', 'user-access:manager'])->group(function () {

    
});