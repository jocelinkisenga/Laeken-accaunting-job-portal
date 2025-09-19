<?php

namespace App\Http\Controllers\Prestataire;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrestataireController extends Controller
{
    public function index () {
        return view("prestataire.dashboard");
    }

    public function myApplications () {
        $applications = Candidate::with(relations: "boulot")->whereUser_id(Auth::user()->id)->latest()->get();
        return view("prestataire.myapplications", compact("applications"));
    }
}
