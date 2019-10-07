<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// use App\Quote;
// use App\Contact;
// use App\Employee;

use App\Explanation;

class jjabController extends Controller
{
    public function index()
    {
        // $contact = Contact::firstOrFail();
        // $quotes = Quote::all();
        // $employees = Employee::all();
        $explanations = Explanation::all();

        $collection = [
            'explanations' => $explanations,
        ];

        return view('master')->with($collection, 'collection');

    }

    // public function anbi()
    // {
    //     $contact = Contact::firstOrFail();
    //
    //     return view('partials.anbi', compact('contact'));
    // }
}
