<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MyEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
   /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data;
    }

public function build() {
    return $this->view("partials.mail")->with("data", $this->data);
}
}
