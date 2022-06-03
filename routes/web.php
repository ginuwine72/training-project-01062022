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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('employee_details', function (){
    return view('employee_details');
});

Route::get('welcome', function (){
    return view('welcome');
});

Route::get('day_report', function (){
    return view('day_report');
});

Route::get('mounth_report', function (){
    return view('mounth_report');
});

Route::get('/main', [App\Http\Controllers\EmpController::class, 'Emp'])->name('main');

Route::get('/chart/month', [App\Http\Controllers\ChartController::class, 'Chart_Month']);

