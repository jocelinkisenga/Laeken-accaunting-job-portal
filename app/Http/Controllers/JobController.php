<?php

namespace App\Http\Controllers;

use App\Models\Boulot;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view("admin.jobs", ['boulots' => Boulot::latest()->get()]);
    }
    public function create(){
        return view("admin.formjob");
    }

    public function store(Request $request)
    {
     
        Boulot::create([
            'title' => $request->title,
            'due_date' => $request->due_date,
            'description' => $request->description
        ]);

        return redirect('/adminjobs');
    }

    public function front () {
        return view("front.jobs", ["jobs" => Boulot::whereDone(false)->latest()->get()]);
    }

    public function single ($title, $id) {
        return view("front.singleJob", ["job" => Boulot::findOrFail($id)]);
    }
}
