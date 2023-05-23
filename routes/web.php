<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/loginproses', [AdminController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'hakakses:admin']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');
    Route::post('/insertpengguna', [AdminController::class, 'insertpengguna'])->name('insertpengguna');
    Route::get('/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('resetpassword');
    Route::get('/deletepengguna/{id}', [AdminController::class, 'deletepengguna'])->name('deletepengguna');

    Route::get('/penyakit', [AdminController::class, 'penyakit'])->name('penyakit');
    Route::post('/insertpenyakit', [AdminController::class, 'insertpenyakit'])->name('insertpenyakit');
    Route::get('/editpenyakit/{id}', [AdminController::class, 'editpenyakit'])->name('editpenyakit');
    Route::post('/updatepenyakit/{id}', [AdminController::class, 'updatepenyakit'])->name('updatepenyakit');
    Route::get('/deletepenyakit/{id}', [AdminController::class, 'deletepenyakit'])->name('deletepenyakit');

    Route::get('/gejala', [AdminController::class, 'gejala'])->name('gejala');
    Route::post('/insertgejala', [AdminController::class, 'insertgejala'])->name('insertgejala');
    Route::get('/editgejala/{id}', [AdminController::class, 'editgejala'])->name('editgejala');
    Route::post('/updategejala/{id}', [AdminController::class, 'updategejala'])->name('updategejala');
    Route::get('/deletegejala/{id}', [AdminController::class, 'deletegejala'])->name('deletegejala');


    Route::get('/aturan', [AdminController::class, 'aturan'])->name('aturan');
    Route::post('/insertaturan', [AdminController::class, 'insertaturan'])->name('insertaturan');
    Route::get('/editaturan/{id}', [AdminController::class, 'editaturan'])->name('editaturan');
    Route::post('/updateaturan/{id}', [AdminController::class, 'updateaturan'])->name('updateaturan');
    Route::get('/deleteaturan/{id}', [AdminController::class, 'deleteaturan'])->name('deleteaturan');

    Route::get('/diagnosa', [AdminController::class, 'diagnosa'])->name('diagnosa');
    Route::get('/konsultasi', [AdminController::class, 'konsultasi'])->name('konsultasi');
});
