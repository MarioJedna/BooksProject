<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function latest()
    {
        $latest_books = Book::orderBy('publication_date', 'desc')->limit(15)->with('authors')->get();
        return $latest_books;
    }

    public function search(Request $request)
    {
        $search = $request->query('search');
        $results = Book::where('title', 'like', "%{$search}%")->limit(5)->get();
        return $results;
    }
}
