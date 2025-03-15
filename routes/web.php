<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('index');
Route::get('/edit-book/{book}', EditController::class)->name('book.edit');
Route::patch('update-book/{book}', UpdateController::class)->name('book.update');
Route::get('/create-book', CreateController::class)->name('book.create');
Route::post('/store-book', StoreController::class)->name('book.store');
Route::delete('delete-book/{book}', DestroyController::class)->name('book.destroy');
