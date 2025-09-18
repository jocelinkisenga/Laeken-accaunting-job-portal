<?php

namespace App\Http\Controllers\Prestataire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrestataireController extends Controller
{
    public function index () {
        return view("prestataire.dashboard");
    }
}
