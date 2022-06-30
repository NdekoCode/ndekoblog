<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index()
    {
        $posts = auth()->user()->posts;
        return view('dashboard', compact('posts'));
    }
}
