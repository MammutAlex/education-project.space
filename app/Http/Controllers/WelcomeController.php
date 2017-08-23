<?php

namespace App\Http\Controllers;

use App\Organization;
use App\Person;
use App\Review;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Review $review)
    {
        return view('welcome', ['reviews' => $review->get()]);
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

    public function about(Person $person)
    {
        return view('about', ['persons' => $person->get()]);
    }
}
