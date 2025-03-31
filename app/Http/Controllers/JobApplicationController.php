<?php

 namespace App\Http\Controllers;

use App\Models\JobBoard;
use Illuminate\Http\Request;

 class JobApplicationController extends Controller
 {
     public function create(JobBoard $job)
     {
         return view('job_application.create', ['job' => $job]);
     }

     public function store(Request $request)
     {
         //
     }

     public function destroy(string $id)
     {
         //
     }
 }
