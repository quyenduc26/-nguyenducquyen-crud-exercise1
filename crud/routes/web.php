<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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

Route::get('/', [StudentsController::class, 'index'])->name('index');

Route::get('/create', [StudentsController::class, 'create'])->name('create');   
Route::post('/create', [StudentsController::class, 'store'])->name('store');

Route::get('/update', [StudentsController::class, 'edit'])->name('edit');
Route::post('/update', [StudentsController::class, 'update'])->name('update');

Route::get('/delete', [StudentsController::class, 'destroy'])->name('delete');

