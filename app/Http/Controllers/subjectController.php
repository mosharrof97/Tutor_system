<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Subject;
use App\Models\StudentClass;

class subjectController extends Controller
{
    // ---------subject View----------//
    public Function subject(){
        $subject = Subject::orderBy('subject_id', 'desc')->get();
        return view('dashboard\page\subject\allsubject', compact('subject'));
    }

    // ---------subject Add----------//
    public Function addsubject(){
        $class = StudentClass::get();
        return view('dashboard\page\subject\addsubject', compact('class') );
    }

    public Function store( Request $request ){
        $request->validate([
            'subject_name' => 'required|max:100',
            'class_id'=> 'required',
        ]);
        $data=[
            'subject_name'=> $request->subject_name,
            'class_id'=> $request->class_id,
        ];
        Subject::create($data);
        return Redirect::route('addsubject')->with('success', 'subject Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $subject = Subject::where('subject_id', $id)->first();
        $class = StudentClass::get();
        return view('dashboard\page\subject\updatesubject', compact('subject','class'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'subject_name' => 'required|max:100',
            'class_id'=> 'required',
        ]);
        $data=[
            'subject_name'=> $request->subject_name,
            'class_id'=> $request->class_id,
        ];
        Subject::where('subject_id', $id)->update($data);
        return Redirect::route('subject')->with('success', 'Subject Update Successfull');
    }

    // ---------Delete----------//
    public Function delete( $id){
        Subject::where('subject_id', $id)->delete();
        return Redirect::route('subject')->with('success', 'Subject Delete Successfull');
    }
}
