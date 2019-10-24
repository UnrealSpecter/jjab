<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $to = Contact::firstOrFail()->email;

        $email = $data->email;
        $content = $data->content;

        $data = array(
            'email' => $email,
            'content' => $content,
        );

        try {

            Mail::send("emails.mail", $data, function($message) use ($to, $email, $content) {

                $message
                    ->to($to, 'JJAB')
                    ->subject('Nieuw vraag van: ' . $email)
                    ->from($email, ' DHEVAK ( ͡° ͜ʖ ͡°) ');

            });

            return response()->json('mail success', 201);

        }
        catch (Exception $exception) {

            return response()->json([
                'status' => 'error',
                'msg'    => 'Error',
                'errors' => 'errors',
            ], 422);

        }

    }

    // public function anbi()
    // {
    //     $contact = Contact::firstOrFail();
    //
    //     return view('partials.anbi', compact('contact'));
    // }
}
