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

    public function contact()
    {
        return view('contact');
    }

    public function organizations()
    {
        return view('organizations');
    }

    public function about()
    {
        return view('about');
    }
}
