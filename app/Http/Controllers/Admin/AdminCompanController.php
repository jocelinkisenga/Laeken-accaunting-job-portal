<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminCompanController extends Controller
{
    public function index () : View {
        $compagnies = User::whereRole(RoleEnum::EMPLOYEUR)->latest()->get();
        return view('admin.admincompagnies', ['compagnies' => $compagnies]);
    }
}
