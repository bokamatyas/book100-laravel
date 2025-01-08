<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'listBooks']);
Route::get('/books/{lang?}/{auth?}', [BookController::class, 'listBooks']);
