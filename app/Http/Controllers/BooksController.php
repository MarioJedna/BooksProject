<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BooksController extends Controller
{
    public function show($bookId)
    {
        $book = Book::findorfail($bookId);
        return view('book.detail', compact('book'));
    }

    public function review(Request $request, $bookId)
    {

        $request->validate([
            'text' => 'required|max:255',
        ]);

        $review = new Review;
        $review->book_id = $bookId;
        $review->user_id = auth()->user()->id;
        $review->text = $request->input('text');
        // dd($review);
        $review->save();

        session()->flash('success_message', 'Review saved successfully');

        return Redirect::back();
    }
}
