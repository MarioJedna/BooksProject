<?php

namespace App\Http\Controllers;

use App\Models\Bookshop;
use Illuminate\Http\Request;

class BookshopController extends Controller
{
    public function show($bookshopId)
    {
        $bookshop = Bookshop::findorfail($bookshopId);
        return view('bookshop.show', compact('bookshop'));
    }
}
