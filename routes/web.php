<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/', function () {
    return view('welcome'); // Halaman awal
});

Route::get('/jobs', [JobController::class, 'index']); // Halaman daftar lowongan
Route::get('/job/{id}', [JobController::class, 'show']); // Halaman detail