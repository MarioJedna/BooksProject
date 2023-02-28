<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        return view('auth.home', compact('user'));
    }
}
