<?php

namespace App\Livewire;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name, $email,$subject, $msg = "";

    protected $rules = [
        "name" => "required",
        "email" => "required|email",
        "subject" => "required",
        "msg" => "required",
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function submit(){

        $this->validate();
        Mail::to("kisengajocelin7@gmail.com")->send(new ContactMail($this->name,$this->email,$this->subject, $this->msg));


    }
}
