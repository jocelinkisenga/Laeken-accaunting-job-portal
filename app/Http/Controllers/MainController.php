<?php

namespace App\Http\Controllers;

use App\Models\Boulot;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {
        $jobs = Boulot::wherePublished(true)->with('user')->whereDone(false)->latest()->limit(8)->get();
        
        return view("front.main", compact('jobs'));
    }
}
