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

Route::resource('/','AttendaceController');
Route::get('/admin','AdminController@index')->name('admin');
Route::resource('/admin/employees','EmployeeMaintenanceController');
Route::resource('/admin/users','UserMaintenanceController');

Auth::routes();

Route::get('/x',function(){
    return view('auth.register');
});

Route::get('/var',function(){
    return view('partials.auth.navAuth');
});




