<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/booking_table', function () {
    return view('booking_table');
});
Route::get('/booking_event', function () {
    return view('booking_event');
});
Route::get('/kitchen', function () {
    return view('kitchen');
});
