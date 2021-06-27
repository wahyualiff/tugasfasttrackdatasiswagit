<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;


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
Route::get('/beranda', [MenuController::class, 'home'])->name('beranda');
Route::get('/siswa', [MenuController::class, 'data_siswa']);
Route::get('/guru', [MenuController::class, 'data_guru']);

// Route CRUD
Route::resource('users', UserController::class)->middleware('role:guru');
// Route::resource('siswa', (SiswaController::class));
Auth::routes();
