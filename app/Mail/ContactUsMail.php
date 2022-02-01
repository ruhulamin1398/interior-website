<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUsMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactUsMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactUsMail)
    {
        $this->contactUsMail = $contactUsMail;

       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A message from Contact us')->view('emails.contactuscontent');
    }
}
