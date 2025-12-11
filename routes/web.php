<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');
Route::view('/ev/amarox', 'amarox');
Route::view('/ev/oilatum', 'oilatum');
Route::view('/ev/pafinur', 'pafinur');
Route::view('/ev/nizoral', 'nizoral');
// Route::view('/ev/oilatum/print', 'print');
Volt::route('/ev/oilatum/print', 'pages.oilatum.print');
Volt::route('/ev/pafinur/print', 'pages.pafinur.print');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
