<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tuitor;
use App\Models\Subject;

class dashboardController extends Controller
{
    public function dashboard(){
        $data=[
            'user' => User::get(),
            'jobDetails' => Tuitor::get(),
            'subject' => Subject::get(),
            'jobSeeker' => User::where('id', 3)->get(),
            'guardian' => User::where('id', 2)->get(),
        ];
        // dd(count($data['jobSeeker']));

        return view('dashboard.page.dashboard1', $data);
    }
}
