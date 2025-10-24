<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', [UserController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/pelajaran', [PelajaranController::class, 'index']);