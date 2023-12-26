<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Student;

class studentController extends Controller
{
    // ---------Student View----------//
    public Function student(){
        $student = Student::orderBy('student_id', 'desc')->get();
        return view('dashboard\page\Student\allstudent', compact('student'));
    }

    // ---------Student Add----------//
    public Function addstudent(){
        return view('dashboard\page\Student\addstudent');
    }

    public Function store( Request $request ){

        $request->validate([
            'nb_of_student' => 'required|max:100',
        ]);
        // dd($request->all());
        Student::create($request->all());
        return Redirect::route('addstudent')->with('success', 'student Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $student = Student::where('student_id', $id)->first();
        return view('dashboard\page\student\updatestudent', compact('student'));
    }

    public Function update(Request $request, $id){
       
        $request->validate([
            'student' => 'required',
        ]);
      
        $data=[
            'nb_of_student'=> $request->student,
        ];

        $student = Student::where('student_id', $id)->update($data);
        return Redirect::route('student')->with('success', 'student Update Successfull');
    }

    // ---------Delete----------//
    public Function delete( $id){
        $student = Student::where('student_id', $id)->delete();
        return Redirect::route('student')->with('success', 'Student Delete Successfull');
    }
}
