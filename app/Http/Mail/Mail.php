<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Contact as ContactModel;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
    * The order instance.
    *
    * @var Order
    */
    public $request;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $mailTo = ContactModel::all()->first()->mail_to;
        $this->request = [
            'email' => $request->email,
            'content' => $request->content,
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nieuw Bericht!')
                    ->from('dhevak@jjab-website.nl')
                    ->to($this->request['mailTo'])
                    ->markdown('emails.mail');
    }
}
