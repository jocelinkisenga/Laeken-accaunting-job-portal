<?php

namespace App\Http\Controllers;

use App\Models\Boulot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class JobController extends Controller
{
    public function index()
    {
   return view( "employeur.myjobs", ['boulots' => Boulot::latest()->get()]);
    }
    public function create()
    {
        return view(view: "employeur.joboffer");
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'due_date' => ['required'],
            'type' => ['required', 'string', 'max:255'],
        ]);

        Boulot::create([
            'title' => $request->title,
            'due_date' => $request->due_date,
            'description' => $request->description,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route(("employeur.myjobs"));
    }

    public function front()
    {
        $jobs = Boulot::wherePublished(true)->whereDone(false)->latest()->get();
        return view("front.jobs", compact(var_name: 'jobs'));
    }

    public function single($title, $id)
    {
        return view("front.singleJob", ["job" => Boulot::findOrFail($id)]);
    }

    public function destroy(int $id)
    {
        Boulot::destroy($id);
        return redirect()->back();
    }

    public function publish($id)
    {
        $boulot = Boulot::findOrFail($id);
        $boulot->update(attributes: ['published' => true]);
        return redirect()->back();
    }

    public function adminJobs()
    {
        return view("admin.jobs", ['boulots' => Boulot::with("user")->whereDone(false)->latest()->get()]);
    }
}
