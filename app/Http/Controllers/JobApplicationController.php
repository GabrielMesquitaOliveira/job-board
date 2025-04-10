<?php

namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class JobApplicationController extends Controller
{
    public function create(JobBoard $job)
    {
        Gate::authorize('apply', $job);
        return view('job_application.create', ['job' => $job]);
    }

    public function store(JobBoard $job, Request $request)
    {
        Gate::authorize('apply', $job);
        $validatedData = $request->validate([
            'expected_salary' => 'required|min:1|max:1000000',
            'cv' => 'required|file|mimes:pdf|max:2048'
        ]);

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');

        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            'expected_salary' => $validatedData['expected_salary'],
            'cv_path' => $path
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application submitted.');
    }

    public function destroy(string $id)
    {
        //
    }
}
