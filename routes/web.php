<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataSiswaController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/master/akun', function () {
    return view('/master/akun');
});
Route::get('/master/sekolah', function () {
    return view('/master/sekolah');
});
Route::get('/data-siswa', [DataSiswaController::class,'data_siswa']);
