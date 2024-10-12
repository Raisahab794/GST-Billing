<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appcontroller;

Route::get('/', [Appcontroller::class, 'index']);
Route::get('/about', [Appcontroller::class, 'about']);
