<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;

Route::get('/transaksi/cetak/{id}', [TransaksiController::class, 'cetak'])->name('transaksi.cetak');

Route::get('/', function () {
    return view('welcome');
});
