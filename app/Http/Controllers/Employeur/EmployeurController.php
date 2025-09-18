<?php

namespace App\Http\Controllers\Employeur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeurController extends Controller
{
    public function index () {
        return view("employeur.dashboard");
    }

    public function myjobs()
    {
        return view("employeur.myjobs");
    }

    public function mycandidates()
    {
        return view("employeur.mycandidates");
    }
}
