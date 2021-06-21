<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\SiswaController;

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
    return view('welcome');
});

// Blade - Controller
Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/siswa', [MenuController::class, 'data_siswa']);
Route::get('/guru', [MenuController::class, 'data_guru']);

// Route CRUD
Route::resource('sekolah', (SekolahController::class));
Route::resource('siswa', (SiswaController::class));
Auth::routes();
