<?php

use App\Http\Controllers\StudentsController;
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


Route::get("/", [StudentsController::class, 'welcome'])->name("welcome");
Route::post("/addStudent", [StudentsController::class, 'addStudent'])->name("addStudent");
Route::post("/updateStudent", [StudentsController::class, 'updateStudent'])->name("updateStudent");
Route::delete("/deleteStudent", [StudentsController::class, 'deleteStudent'])->name("deleteStudent");
