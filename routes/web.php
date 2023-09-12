<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route::get('/', [BooksController::class, 'index'])->name('index');
//Route::get('/books', [BooksController::class, 'index'])->name('index');
Route::get('/', [BooksController::class, 'select_num'])->name('start');
Route::get('/books/select_num', [BooksController::class, 'select_num'])->name('select_num');
Route::get('/books/guess', [BooksController::class, 'guess'])->name('guess');
Route::get('/books/insert', [BooksController::class, 'insert'])->name('insert');
Route::get('/books/show', [BooksController::class, 'show'])->name('show');
Route::get('/books/clear', [BooksController::class, 'clear'])->name('clear');