<?php

namespace App\Http\Controllers;

use App\Models\ConfirmCandidate;
use App\Http\Requests\StoreConfirmCandidateRequest;
use App\Http\Requests\UpdateConfirmCandidateRequest;

class ConfirmCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function cv(int $id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function lm(int $id)
    {
        //
    }

    public function confirm(int $id)
    {
        return view("admin.confirm", ["candidateId" => $id]);
    }


   
}

