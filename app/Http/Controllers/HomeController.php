<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $user = User::find(16);
        // dd($user->roles()->where('name', 'super_admin')->exists());
        return view('index');
    }
}
