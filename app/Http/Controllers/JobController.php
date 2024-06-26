<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function index()
    {
        return view("jobs.index", [
            "jobs" => Job::with("employer")->latest()->paginate(3)
        ]);
    }

    public function create()
    {
        return view("jobs.create");
    }

    public function show(Job $job)
    {
        return view("jobs.show", [
            "job" => $job
        ]);
    }

    public function store()
    {
        request()->validate([
            "title"=> ["required", "min:3", "max:15"],
            "salary" => ["required", "min:3", "max:6"],

        ]);
        $user = User::find(Auth::id());
        Job::create([
            "title" => request("title"),
            "salary" => request("salary"),
            "employer_id" => $user->employer->id
        ]);

        return redirect("/jobs");
    }

    public function edit(Job $job)
    {
        return view("jobs.edit", [
            "job" => $job
        ]);
    }

    public function update(Job $job)
    {
        request()->validate([
            "title"=> ["required", "min:3", "max:15"],
            "salary" => ["required", "min:3", "max:6"]
        ]);

        $job->update([
            "title" => request("title"),
            "salary" => request("salary"),
        ]);

        return redirect("/jobs/" . $job->id);
    }
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect("/jobs");
    }
}
