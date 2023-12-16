<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Subject;

class subjectController extends Controller
{
    // ---------subject View----------//
    public Function subject(){
        $subject = Subject::orderBy('subject_id', 'desc')->get();
        return view('dashboard\page\subject\allsubject', compact('subject'));
    }

    // ---------subject Add----------//
    public Function addsubject(){
        return view('dashboard\page\subject\addsubject');
    }

    public Function store( Request $request ){
        $request->validate([
            'subject_name' => 'required|max:100',
        ]);
        $data=[
            'subject_name'=> $request->subject_name,
        ];
        Subject::create($data);
        return Redirect::route('addsubject')->with('success', 'subject Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $subject = Subject::where('subject_id', $id)->first();
        return view('dashboard\page\subject\updatesubject', compact('subject'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'subject_name' => 'required|max:100',
        ]);
        $data=[
            'subject_name'=> $request->subject_name,
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
