<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/{lang?}', [BookController::class, 'listByLanguage']);
