<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::query()->orderBy('id', 'desc')->limit(20)->get();
        return view('admin.index', compact('book'));
    }

    public function create()
    {
        return view('admin.create');
    }

    // public function store(Request $request)
    // {
    //     $book = new Book;
    //     $book->name = $request->input('name');
    //     $book->bio = $request->input('bio');
    //     $book->slug = strtolower(str_replace(" ", "-", $request->input('name')) . "-author");
    //     $book->save();
    //     return redirect(route('admin.books'));
    // }
}
