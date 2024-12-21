<?php

namespace App\Livewire;

use App\Models\Candidate;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCandidate extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $domaine;
    public $cv;
    public $motivation;

    protected $rules = [
        "name" => "required",
        "email" => "required|email",
        "phone" => "required",
        "domaine" => "required",
        "cv" => "required|mime:pdf",
        "motivation" => "required|mimes:pdf"
    ];


    public function render()
    {
        return view('livewire.form-candidate');
    }
    public function submit(){

        $this->validate();
        $cvpath = $this->cv->store("uploads","public");
        $motivpath = $this->motivation->store('uploads',"public");
        Candidate::create([
            "name" => $this->name,
            "email" => $this->email ,
            "phone" => $this->phone,
            "domaine" => $this->domaine,
            "cv" => $cvpath,
            "motivation" => $motivpath
        ]);

        session()->flash("candidature envoyé avec succès");
        $this->vider();
    }

    private function vider()
    {
         $name = "";
         $email = "";
         $phone = "";
         $domaine = "";
         $cv = "";
         $motivation = "";
    }
}
