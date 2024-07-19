<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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
    return view('dashboard/admin/index');
});

// Route Pegawai
Route::get('pegawai/api_docs', [PegawaiController::class, 'api_docs'])->name('pegawai.api_docs');
Route::resource('pegawai', PegawaiController::class);
