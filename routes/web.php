<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\BookshopController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\IndexController;
use App\Models\Bookshop;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [IndexController::class, 'index'])->name('homepage');
Route::get('/about-us', [AboutController::class, 'about'])->name('about-us');

Route::get('/api/test/array', [TestController::class, 'arrayResponse']);
Route::get('/api/test/model', [TestController::class, 'modelResponse']);
Route::get('/api/test/collection', [TestController::class, 'collectionResponse']);

//home after login
Route::get('/home', [homeController::class, 'home'])->middleware('auth')->name('home');

//detail about book page
Route::get('/book/{book_id}', [BooksController::class, 'show'])->name('book.detail');

//write and review
Route::post('/book/{book_id}/review', [BooksController::class, 'review'])->name('book.review');

//delete a review
Route::middleware('can:admin-role')->group(function () {
    Route::delete('/book/{book_id}/review/delete', [BooksController::class, 'delete_review'])->name('book.review.delete');
});

//show books sold in bookshop
Route::get('/bookshop/{bookshop_id}', [BookshopController::class, 'show'])->name('bookshop.detail');
