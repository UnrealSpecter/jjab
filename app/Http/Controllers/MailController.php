<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator;

use Mail;
use Exception;
use App\Mail\Contact;
use App\Mail\NewsletterSubscription;
use App\Mail\WorkInquiry;

class MailController extends Controller
{

    public function sendMail(Request $request){

        try {
            Mail::send(new Contact($request));
            return response()->json([ 'success' => 'mail sent' ]);
        }
        catch (\Exception $e) {
            $error = $e->getMessage();
            return response()->json([ 'error' => $error ]);
        }
    }

}
