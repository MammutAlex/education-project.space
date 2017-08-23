<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 23.08.17
 * Time: 20:14
 */

namespace App\Http\Controllers;


use App\Contact;
use App\Subscription;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request, Contact $contact)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255'],
            'name' => ['max:255'],
            'text' => ['required'],
        ]);

        $contact->create($request->all());

        return back()->with('contacted', true);
    }

    public function subscribed(Request $request, Subscription $subscription)
    {
        $this->validate($request, [
            'email' => ['required', 'email', 'max:255']
        ]);

        $subscription->create($request->all());

        session(['subscribed' => true]);
        return back();
    }
}