<?php

namespace App\Livewire;

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

    public function confirm () {

        $this->validate();
        ConfirmForm::create([
            "candidate_id" => $this->candidateId,
            "description" => $this->description,
            'confirm' => true
        ]);
        $this->vider();

        session()->flash("message", "message envoyer avec succèss");
    }

    private function vider () {
        $this->description = "" ;
    }
}
