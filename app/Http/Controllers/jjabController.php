<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Mail;

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

    public function sendMail(Request $request){

        $data = json_decode($request->getContent());

        return response()->json([
            'name' => 'Abigail',
            'state' => 'CA'
        ]);

        $from = "mail-service@dhevak.nl";

        $data = array(
            'email' => $data->email,
            'content' => $data->content,
        );

        Mail::send("emails.mail", $data, function($message) use ($from, $email, $content) {

            $message
                ->to('info@dhevak.nl', 'JJAB')
                ->subject('Nieuw vraag van: ' . $email)
                ->from($from, ' DHEVAK ');

        });

    }

    // public function anbi()
    // {
    //     $contact = Contact::firstOrFail();
    //
    //     return view('partials.anbi', compact('contact'));
    // }
}
