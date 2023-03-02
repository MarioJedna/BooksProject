<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\Admin\UserController;

Route::middleware('can:admin')->group(function () {

    //authors
    Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors');
    Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('admin.authors.create');
    Route::post('/admin/authors', [AuthorController::class, 'store'])->name('admin.authors.store');

    //books
    Route::get('/admin/index', [BookController::class, 'index'])->name('admin.books');
    Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');

    //users
    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');
});
