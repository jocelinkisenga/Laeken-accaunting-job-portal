<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminCandidateController extends Controller
{
    public function index () : View {
        $candidates = User::whereRole(RoleEnum::PRESTATAIRE)->latest()->get();
        return view("admin.admincandidates", ['candidates' => $candidates]);
    }
}
