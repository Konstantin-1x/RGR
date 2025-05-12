<?php

use App\Http\Controllers\booking;
use App\Http\Controllers\booking_event;
use App\Http\Controllers\booking_table;
use App\Http\Controllers\kitchen;
use App\Http\Controllers\welcome;
use Illuminate\Support\Facades\Route;


Route::get('/welcome', [welcome::class, 'show'])->name('welcome');
Route::get('/booking', [booking::class, 'show'])->name('booking');
Route::get('/booking_table', [booking_table::class, 'show'])->name('booking_table');
Route::get('/booking_event', [booking_event::class, 'show'])->name('booking_event');
Route::get('/kitchen', [kitchen::class, 'show'])->name('kitchen');

Route::post('/booking_table_form', [booking_table::class, 'bookingTableForm'])->name('booking_table_form');
Route::post('/booking_event_form', [booking_event::class, 'bookingEventForm'])->name('booking_event_form');
Route::post('/index_form', [welcome::class, 'indexForm'])->name('index_form');
