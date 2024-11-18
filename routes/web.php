<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'bookList'])->name('book.index');
Route::get('/bookDetail/{book}', [BookController::class, 'bookDetail'])->name('book.detail');
Route::get('/book/add', [BookController::class, 'addBook'])->name('book.add');
Route::post('/book/add', [BookController::class, 'storeBook'])->name('book.store');
Route::get('/book/edit/{book}', [BookController::class, 'editBook'])->name('book.edit');
Route::put('/book/edit/{book}', [BookController::class, 'updateBook'])->name('book.update');
Route::delete('/book/delete/{book}', [BookController::class, 'deleteBook'])->name('book.delete');
