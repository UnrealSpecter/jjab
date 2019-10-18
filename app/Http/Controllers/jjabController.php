<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Introduction;
use App\Explanation;
use App\Employee;

class jjabController extends Controller
{
    public function index()
    {
        // $contact = Contact::firstOrFail();
        // $quotes = Quote::all();
        $introduction = Introduction::all();
        $employees = Employee::all();
        $explanations = Explanation::with('examples')->get();

        $tags = [];

        foreach($explanations as $explanation){
            $tag = $explanation->title;
            array_push($tags, $tag);
        }

        $collection = [
            'introduction' => $introduction,
            'tags' => $tags,
            'explanations' => $explanations,
            'employees' => $employees
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
