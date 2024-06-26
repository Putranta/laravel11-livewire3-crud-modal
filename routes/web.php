<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/customer', App\Livewire\CustomerIndex::class)->name('customer.index');
    Route::get('/produk', App\Livewire\Produk\ProdukIndex::class)->name('produk.index');
});
