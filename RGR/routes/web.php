<?php

use Illuminate\Support\Facades\Route;


Route::get('/welcome', [\App\Http\Controllers\welcome::class, 'show'])->name('welcome');
Route::get('/booking', [\App\Http\Controllers\booking::class, 'show'])->name('booking');
Route::get('/booking_table', [\App\Http\Controllers\booking_table::class, 'show'])->name('booking_table');
Route::get('/booking_event', [\App\Http\Controllers\booking_event::class, 'show'])->name('booking_event');
Route::get('/kitchen', [\App\Http\Controllers\kitchen::class, 'show'])->name('kitchen');
