<?php

use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\workingsController;
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

//Product
Route::get('/admin/product/index',[ProductController::class, 'index'])->name('pro.index');
Route::get('/admin/product/create',[ProductController::class, 'create'])->name('pro.create');
Route::post('/admin/product/insert',[ProductController::class, 'insert'])->name('pro.insert');
Route::get('/admin/product/del/{id}',[ProductController::class, 'delete']);
Route::get('/admin/product/edit/{id}',[ProductController::class, 'edit']);
Route::post('/admin/product/update/{id}',[ProductController::class, 'update']);


//Employee
Route::get('/admin/employee/index',[EmployeeController::class, 'index'])->name('employee.index');
Route::get('admin/employee/delete/{id}',[EmployeeController::class, 'delete']);
Route::get('admin/employee/edit/{id}',[EmployeeController::class, 'edit']);
Route::post('admin/employee/update/{id}',[EmployeeController::class, 'update']);


//Calendar
Route::get('admin/calendar/index',[CalendarController::class, 'index'])->name('calendar.index');
Route::get('admin/calendar/create',[CalendarController::class, 'create'])->name('calendar.create');
Route::post('admin/calendar/insert',[CalendarController::class, 'insert'])->name('calendar.insert');
Route::get('admin/calendar/delete/{id}',[CalendarController::class, 'delete']);
Route::get('admin/calendar/edit/{id}',[CalendarController::class, 'edit']);
Route::post('admin/calendar/update/{id}',[CalendarController::class, 'update']);


//working
Route::get('admin/working/index',[workingsController::class, 'index'])->name('working.index');
Route::get('admin/working/create',[workingsController::class, 'create'])->name('working.create');
Route::post('admin/working/insert',[workingsController::class, 'insert'])->name('working.insert');
Route::get('admin/working/delete/{id}',[workingsController::class, 'delete']);
Route::get('admin/working/edit/{id}',[workingsController::class, 'edit']);
Route::post('admin/working/update/{id}',[workingsController::class, 'update']);
