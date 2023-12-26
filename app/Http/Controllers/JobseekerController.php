<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class JobseekerController extends Controller
{
    public function jobSeeker(){

        $jobSeeker = User::where('role', 3)->get();
        return View('dashboard.page.jobSeeker.jobSeeker', compact('jobSeeker'));
    }

    public function details($id){

        $jobSeeker = User::where('id', $id)->first();
        return View('dashboard.page.jobSeeker.jobSeekerDetails', compact('jobSeeker'));
    }

    public Function delete( $id){
        User::where('id', $id)->delete();
        return Redirect::route('all_job_seeker')->with('success', 'Job Seeker Delete Successfull');
    }
}
