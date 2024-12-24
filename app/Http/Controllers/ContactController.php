<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ContactController extends Controller
{
    public function index()  {

        return view("front.contact");
    }

    public function about() {
        return view('front.about');
    }
}
