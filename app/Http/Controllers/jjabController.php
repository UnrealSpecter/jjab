<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Introduction;
use App\Explanation;
use App\Employee;
use App\Contact;

class jjabController extends Controller
{
    public function index()
    {
        $introduction = Introduction::firstOrFail();
        $employees = Employee::all();
        $explanations = Explanation::with('examples')->get();
        $contact = Contact::firstOrFail();
        $contact->address = $contact->street_name . ' ' . $contact->house_number . ', ' . $contact->postal_code . ' ' . $contact->residence;

        $tags = [];

        foreach($explanations as $explanation){
            $tag = $explanation->title;
            array_push($tags, $tag);
        }

        $collection = [
            'introduction' => $introduction,
            'tags' => $tags,
            'explanations' => $explanations,
            'employees' => $employees,
            'contact' => $contact
        ];

        return view('master')->with($collection, 'collection');

    }

    public function sendMail(){

        $name = "Dhevak";
        $email = "info@dhevak.nl";

        $data = array(
            'name' => "Name",
            'body' => "Body"
        );

        Mail::send("emails.mail", $data, function($message) use ($name, $email) {

            $message
                ->to($email, $name)
                ->subject('Laravel Test Mail');

            $message
                ->from("SENDER_EMAIL_ADDRESS", 'Test Mail');

        });

    }

    // public function anbi()
    // {
    //     $contact = Contact::firstOrFail();
    //
    //     return view('partials.anbi', compact('contact'));
    // }
}
