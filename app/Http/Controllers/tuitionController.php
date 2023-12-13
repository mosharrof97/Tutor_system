<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Tuition;

class tuitionController extends Controller
{
      // ---------Tuition View----------//
    public Function tuition(){
        $tuition = Tuition::orderBy('tuition_id', 'desc')->get();
        return view('dashboard\page\tuition\alltuition', compact('tuition'));
    }

    // ---------Tuition Add----------//
    public Function addtuition(){
        return view('dashboard\page\tuition\addTuitionType');
    }

    public Function store( Request $request ){
        $request->validate([
            'tuition_type' => 'required|max:100',
        ]);
        $data=[
            'tuition_name'=> $request->tuition_type,
        ];
        Tuition::create($data);
        return Redirect::route('addtuition')->with('success', 'Tuition Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $tuition = Tuition::where('tuition_id', $id)->first();
        return view('dashboard\page\tuition\updateTuitionType', compact('tuition'));
    }

    public Function update(Request $request){
        $request->validate([
            'tuition_type' => 'required|max:100',
        ]);
        $data=[
            'tuition_name'=> $request->tuition_type,
        ];
        Tuition::update($data);
        return Redirect::route('tuition')->with('success', 'Tuition Update Successfull');
    }

// ---------Delete----------//
    public Function delete( $id){
// dd($id);
        $tuition = Tuition::where('tuition_id', $id)->find();
        // dd($tuition);
        $tuition->delete();
        return Redirect::route('tuition')->with('success', 'Tuition Update Successfull');
    }
}
