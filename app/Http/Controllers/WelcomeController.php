<?php

namespace App\Http\Controllers;

use App\Calendar;
use App\Organization;
use App\Person;
use App\Review;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Review $review, Calendar $calendar)
    {
        $calendars = $calendar->orderBy('date', 'desc')->take(3)->get();
        return view('welcome', [
            'reviews' => $review->get(),
            'calendars' => $calendars
        ]);
    }

    public function coming()
    {
        return view('coming-soon');
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
