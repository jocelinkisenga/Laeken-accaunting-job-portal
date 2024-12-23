<?php

namespace App\Livewire;

use App\Mail\Confirm;
use App\Models\Candidate;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ConfirmForm extends Component
{
    public $candidateId;
    public  $description;

    protected $rules = [
        "description " => "required"
    ];

    public function render()
    {
        return view('livewire.confirm-form');
    }

    public function confirm () 
    {

        $this->validate();

        ConfirmForm::create([
            "candidate_id" => $this->candidateId,
            "description" => $this->description,
            'confirm' => true
        ]);

        $candidate = Candidate::where("candidate_id", $this->candidateId)->get(["name", "email"]);

        $title = "bonjour".$name.";
        $body = $this->description;

        Mail::to($candidate->email)->send(new Confirm($title, $body));


       
    }
    
    }