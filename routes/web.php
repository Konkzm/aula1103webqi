<?php

use App\Http\Controllers\AlunoController;
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

Route::get('aluno/create' , [AlunoController::class , 'create'])->name('aluno-create');
Route::post('/aluno', [AlunoController::class, 'store'])->name('aluno-store');