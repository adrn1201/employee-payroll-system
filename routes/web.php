<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeRecordController;
use App\Http\Controllers\RecordsFilterController;
use Illuminate\Support\Facades\Route;




require __DIR__.'/auth.php';

Route::get('record', [RecordsFilterController::class, 'index'])->middleware('auth');

Route::get('department-records',[DepartmentController::class, 'index'])->middleware('auth');
Route::post('department-records',[DepartmentController::class, 'store'])->middleware('admin');
Route::get('create-department',[DepartmentController::class, 'create'])->middleware('admin');
Route::get('departments/{department}/edit',[DepartmentController::class, 'edit'])->middleware('admin');
Route::patch('departments/{department}',[DepartmentController::class, 'update'])->middleware('admin');
Route::delete('departments/{department}',[DepartmentController::class, 'destroy'])->middleware('admin');


Route::get('/',[EmployeeController::class, 'index'])->middleware('auth');
Route::get('create-employee', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('employee-records', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');
Route::patch('employees/{employee}', [EmployeeController::class, 'update'])->middleware('auth');
Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth');

Route::get('employee-records',[EmployeeRecordController::class, 'index'])->middleware('auth');



