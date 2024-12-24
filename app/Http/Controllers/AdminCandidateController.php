<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminCandidateController extends Controller
{
    public function index () : View {
        $candidates = Candidate::latest()->get();
        return view("admin.admincandidates", ['candidates' => $candidates]);
    }
}
