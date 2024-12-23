<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormCompany extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $description;
    public $motivation;

    protected $rules = [
        "name" => "required",
        "email" => "required|email",
        "phone" => "required",
        "description" => "required",
        "motivation" => "required|mimes:pdf"
    ];

    public function render()
    {
        return view('livewire.form-company');
    }

    public function submit(){
        $this->validate();
        
        $motivpath = $this->motivation->store('uploads',"public");
        Company::create([
            "name" => $this->name,
            "email" => $this->email ,
            "phone" => $this->phone,
            "description" => $this->description,
            "motivation" => $motivpath
        ]);
        session()->flash("message","Offre envoyé avec succès");
        $this->vider();
    }

    private function vider()
    {
         $this->name = " ";
         $this->email = " ";
         $this->phone = " ";
         $this->description = " ";
         $this->motivation = " ";
    }
}
