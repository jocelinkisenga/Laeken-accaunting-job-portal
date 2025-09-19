<?php

namespace App\Livewire;

use App\Mail\CandidatureMail;
use App\Models\Candidate;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCandidate extends Component
{
    use WithFileUploads;

    public $boulotId;
    public $cv;
    public $description;

    protected $rules = [
        "description" => "required",
        "cv" => "required|mimes:pdf",
    ];


    public function render()
    {
        return view('livewire.form-candidate');
    }
    public function submit(){

        $this->validate();
        $cvpath = $this->cv->store("uploads","public");
        Candidate::create([
            "boulot_id" => $this->boulotId,
            "user_id" => Auth::user()->id ,
            "description" => $this->description,
            "cv" => $cvpath
        ]);
        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new CandidatureMail($this->name, $this->email));

        session()->flash("message","Candidature envoyé avec succès, nous vous informerons
        dans un bref delai");
        $this->vider();
    }

    private function vider()
    {
         $this->name = " ";
         $this->email = " ";
         $this->phone = " ";
         $this->domaine = " ";
         $this->cv = "";
         $this->motivation = " ";
    }
}
