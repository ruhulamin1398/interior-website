<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;
    public $quoteMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($quoteMail)
    {
        $this->quoteMail = $quoteMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A message from Quote')->view('emails.quotemail');
    }
}
