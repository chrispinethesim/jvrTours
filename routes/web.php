<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get("about-us", [AboutUsController::class, 'index'])->name('about-us');