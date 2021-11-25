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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/datatable',[App\Http\Controllers\DatatableController::class, 'getReport'])->name('getreport');
Route::resource('visitors', 'App\Http\Controllers\VisitorController');
Route::resource('reports', 'App\Http\Controllers\ReportController');
Route::resource('checkouts', 'App\Http\Controllers\CheckoutController');