<?php

namespace App\Http\Controllers;

use App\Organization;
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

    public function organizations(Organization $organization)
    {
        return view('organizations', ['organizations' => $organization->get()]);
    }

    public function about()
    {
        return view('about');
    }
}
