<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\StudentClass;
class StudentClass extends Controller
{

      // ---------Class View----------//
      public Function classes(){
        $classes = StudentClass::orderBy('student_id', 'desc')->get();
        return view('dashboard\page\class\allclass', compact('class'));
    }

    // ---------Class Add----------//
    public Function addtuition(){
        return view('dashboard\page\class\addclass');
    }

    public Function store( Request $request ){
        $request->validate([
            'student_type' => 'required|max:100',
        ]);
        $data=[
            'student_name'=> $request->student_type,
        ];
        StudentClass::create($data);
        return Redirect::route('addclass')->with('success', 'Class Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $tuition = StudentClass::where('student_id', $id)->first();
        return view('dashboard\page\class\updateclass', compact('class'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'student_type' => 'required|max:100',
        ]);
        $data=[
            'student_name'=> $request->tuition_type,
        ];
        StudentClass::where('student_id', $id)->update($data);
        return Redirect::route('class')->with('success', 'Class Update Successfull');
    }

// ---------Delete----------//
    public Function delete( $id){
        $tuition = StudentClass::where('student_id', $id)->delete();
        return Redirect::route('class')->with('success', 'Class Update Successfull');
    }
}
