<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', [MahasiswaController::class,'index'])->name('index');
Route::get('/form', [MahasiswaController::class, 'form']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class,'edit'])
->name('mahasiswas-edit');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class,'destroy'])
->name('mahasiswas-destroy');
Route::get('/update', [MahasiswaController::class, 'update']);
