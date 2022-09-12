<?php

use App\Http\Controllers\JasaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\TransaksiController;
use App\Models\Jasa;
use App\Models\Sparepart;
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
    $jasa = Jasa::latest()->paginate(10);
    $sparepart = Sparepart::latest()->paginate(10);
    return view('welcome', [
        'jasa' => $jasa,
        'sparepart' => $sparepart
    ]);
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource('sparepart',SparepartController::class)->middleware('auth');
Route::resource('jasa',JasaController::class)->middleware('auth');
Route::resource('pegawai',PegawaiController::class)->middleware('auth');
Route::resource('transaksi',TransaksiController::class)->middleware('auth');
Route::get('laporan',[LaporanController::class, 'index'])->middleware('auth');




