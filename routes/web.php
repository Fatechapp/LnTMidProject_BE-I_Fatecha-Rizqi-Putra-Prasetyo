<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', [KaryawanController::class, 'viewKaryawan']) -> name('viewKaryawan');

Route::get('/dashboard/add', [KaryawanController::class, 'addKaryawanView']) -> name('viewKaryawanAdd');
Route::post('/dashboard/add', [KaryawanController::class, 'addKaryawan']) -> name('karyawanAdd');

Route::get('/dashboard/delete/{id}', [KaryawanController::class, 'deleteKaryawan']) -> name('karyawanDelete');


Route::get('/dashboard/edit/{id}', [KaryawanController::class, 'editKaryawanView']) -> name('viewkaryawanEdit');
Route::post('/dashboard/edit/{id}', [KaryawanController::class, 'editKaryawan']) -> name('karyawanEdit');

