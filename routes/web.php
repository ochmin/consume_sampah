<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;
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

Route::get('/', [SampahController::class, 'index'])->name('home');
Route::get('/add', [SampahController::class, 'create'])->name('add'); 
Route::post('/add/send', [SampahController::class, 'store'])->name('send'); 
Route::get('/edit/{id}', [SampahController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [SampahController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [SampahController::class, 'destroy'])->name('delete');
Route::get('/trash', [SampahController::class, 'trash'])->name('trash');
Route::get('/trash/restore/{id}', [SampahController::class, 'restore'])->name('restore');
Route::get('/trash/delete/permanent{id}', [SampahController::class, 'permanent'])->name('permanent');
