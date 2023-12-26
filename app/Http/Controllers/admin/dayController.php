<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Day;

class dayController extends Controller
{
  
    // ---------Day View----------//
    public Function day(){
        $day = Day::orderBy('day_id', 'desc')->get();
        return view('dashboard\page\day\allday', compact('day'));
    }

    // ---------Day Add----------//
    public Function addday(){
        return view('dashboard\page\day\addday');
    }

    public Function store( Request $request ){
        $request->validate([
            'day_name' => 'required|max:100',
        ]);
        $data=[
            'day_name'=> $request->day_name,
        ];
        Day::create($data);
        return Redirect::route('addday')->with('success', 'Day Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $day = Day::where('day_id', $id)->first();
        return view('dashboard\page\day\updateday', compact('day'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'day_name' => 'required|max:100',
        ]);
        $data=[
            'day_name'=> $request->day_name,
        ];
         Day::where('day_id', $id)->update($data);
        return Redirect::route('day')->with('success', 'Day Update Successfull');
    }

// ---------Delete----------//
    public Function delete( $id){
        Day::where('day_id', $id)->delete();
        return Redirect::route('day')->with('success', 'Day Delete Successfull');
    }
}
