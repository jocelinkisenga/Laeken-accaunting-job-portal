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
        return view("front.jobs", ["jobs" => Boulot::whereDone(false)->latest()->get()]);
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

    public function confirm($id)
    {
        $boulot = Boulot::findOrFail($id);
        $boulot->update(['done' => true]);
        return redirect()->back();
    }
}
