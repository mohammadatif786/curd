<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[EmployeeController::class,'index'])->name('/');
Route::post("store",[EmployeeController::class,'store'])->name("store");
Route::get("edit/{id}",[EmployeeController::class,'edit'])->name("edit");
Route::post("update/{id}",[EmployeeController::class,'update'])->name("update");
Route::get("delete/{id}",[EmployeeController::class,'delete'])->name("delete");
