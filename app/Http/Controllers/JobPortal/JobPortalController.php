<?php

namespace App\Http\Controllers\JobPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobPosting\JobPosting;

class JobPortalController extends Controller
{
    public function index()
    {
        $jobs = JobPosting::where('isActive', true)->get();
        return view("Sys.JobPortal.JobPortal", compact('jobs'));
    }
}
