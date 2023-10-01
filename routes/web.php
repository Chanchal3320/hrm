<?php

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


Route::post('/search/result', [App\Http\Controllers\WelcomeController::class, 'search'])->name('searchResult');
Route::post('/search/increment/result', [App\Http\Controllers\WelcomeController::class, 'searchIncrement'])->name('searchResultIncrement');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allCompany', [App\Http\Controllers\CompanyController::class, 'index'])->name('company');
Route::get('/newCompany', [App\Http\Controllers\CompanyController::class, 'create'])->name('newCompany');
Route::post('/addCompany', [App\Http\Controllers\CompanyController::class, 'store'])->name('addCompany');

Route::get('/allDepartment', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department');
Route::get('/newDepartment', [App\Http\Controllers\DepartmentController::class, 'create'])->name('newDepartment');
Route::post('/addDepartment', [App\Http\Controllers\DepartmentController::class, 'store'])->name('addDepartment');

Route::get('/allEmployee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee');


Route::get('/allIncrement', [App\Http\Controllers\IncreamentController::class, 'index'])->name('increment');
Route::get('/newIncrement', [App\Http\Controllers\IncreamentController::class, 'create'])->name('newIncrementData');
Route::post('/addIncrement', [App\Http\Controllers\IncreamentController::class, 'store'])->name('addInc');
