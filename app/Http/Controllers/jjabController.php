<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Quote;
use App\Contact;
use App\Employee;

class jjabController extends Controller
{
    public function index()
    {
        // $contact = Contact::firstOrFail();
        // $quotes = Quote::all();
        // $employees = Employee::all();

        return view('master');
    }

    // public function anbi()
    // {
    //     $contact = Contact::firstOrFail();
    //
    //     return view('partials.anbi', compact('contact'));
    // }
}
