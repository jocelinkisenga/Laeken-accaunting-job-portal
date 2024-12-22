<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminCompanController extends Controller
{
    public function index () : View {
        $compagnies = Company::latest()->get();
        return view('admin.admincompagnies', ['compagnies' => $compagnies]);
    }
}
