<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // ->with('authors') or $crime_books->load('authors');
        $crime_books = Book::where('category_2_id', 12)->orderBy('publication_date', 'desc')->limit(10)->with('authors', 'publishers')->get();
        return view('index.index', compact('crime_books'));
    }
}
