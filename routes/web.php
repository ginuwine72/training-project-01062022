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

Route::get('/main', function () {
    return view('main');
});

Route::get('employee_details', function (){
    return view('employee_details');
});

Route::get('graph', function (){
    return view('graph');
});

Route::get('day_report', function (){
    return view('day_report');
});

Route::get('mounth_report', function (){
    return view('mounth_report');
});