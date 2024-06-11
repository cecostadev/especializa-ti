<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SupportController;

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

//Support Methods

//::GET::
Route::get('/', [SupportController::class, 'index'])->name('support.index');
Route::get('/supports', [SupportController::class, 'index'])->name('support.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('support.create');
Route::get('/supports/edit/{id}', [SupportController::class, 'edit'])->name('support.edit');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('support.show');

//::POST::
Route::post('/supports', [SupportController::class, 'store'])->name('support.store');

//::PUT::
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('support.update');

//::DELETE::
Route::delete('supports/remove/{id}', [SupportController::class, 'destroy'])->name('support.remove');

