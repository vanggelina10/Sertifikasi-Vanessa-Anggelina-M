<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\loginController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\perpusController;

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
Route::get('/', function () {return view('login');});
Route::post('/loginadmin',[loginController::class,"Login"]);

Route::get('/pencatatan', [perpusController::class,'index']);
Route::get('/insert',[PeminjamController::class,'list']);
Route::get('/babi/{title}',[perpusController::class,'update'])->name('babi.modar');
Route::post('/insert',[PeminjamController::class,'insert']);
// Route::get('/insert', function () {return view('insert');});

Route::post('/katalog',[katalogController::class,'insertbuku']);
Route::post('/store',[katalogController::class,"insertbuku"]);
Route::get('/insertbuku', function () {return view('insertbuku');});
Route::get('/update', function () {return view('update');});

Route::get('/katalog',[katalogController::class,'fetch']);
Route::get('/delete/katalog/{id}',[katalogcontroller::class,'deleteKatalog'])->name('delete.katalog');
Route::get('/edit/katalog/{id}',[katalogcontroller::class,'edit'])->name('edit.katalog');
Route::put('/update/katalog/{id}',[katalogcontroller::class,'update'])->name('update.katalog');
