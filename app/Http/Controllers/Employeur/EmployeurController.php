<?php

namespace App\Http\Controllers\Employeur;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Boulot;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeurController extends Controller
{
    public function index () {
        return view("employeur.dashboard");
    }

    public function myjobs()
    {

        return view("employeur.myjobs", ['boulots' => Boulot::latest()->get()]);
    }

    public function mycandidates($id)
    {
        $prestataires = User::whereRole(RoleEnum::PRESTATAIRE)->whereHas('candidatures', fn($q) => $q->where('boulot_id',$id))->get();


        return view("employeur.mycandidates", compact('prestataires'));
    }
}
