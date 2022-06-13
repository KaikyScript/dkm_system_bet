<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home()
    {
        return view('assets.home');
    }

    public function dashboard()
    {
        return view('dashboard', ['user' =>auth()->user()]);
    }

    public function gerenciamento()
    {
        return view('assets.gerenciamento', ['user' =>auth()->user()]);
    }
}
