<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouForSubscribing extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('Thank You for Subscribing!')
            ->view('emails.thankyou');
    }
}
