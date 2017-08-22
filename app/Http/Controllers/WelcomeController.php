<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function coming()
    {
        return view('coming-soon');
    }

    public function direction()
    {
        return view('direction');
    }

    public function blog()
    {
        return view('blog');
    }
    public function article()
    {
        return view('article');
    }
}
