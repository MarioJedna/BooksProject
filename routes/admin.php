<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;



Route::get('/admin/authors', [AuthorController::class, 'index'])->name('admin.authors');
Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('admin.authors.create');
Route::post('/admin/authors', [AuthorController::class, 'store'])->name('admin.authors.store');

