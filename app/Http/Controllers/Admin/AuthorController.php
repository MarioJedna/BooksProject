<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::query()->orderBy('id', 'desc')->limit(20)->get();
        return view('admin.authors', compact('authors'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $author = new Author;
        $author->name = $request->input('name');
        $author->bio = $request->input('bio');
        $author->slug = strtolower(str_replace(" ", "-", $request->input('name')) . "-author");
        $author->save();
        return redirect(route('admin.authors'));
    }
}
