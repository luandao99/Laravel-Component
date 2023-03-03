<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;


Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');