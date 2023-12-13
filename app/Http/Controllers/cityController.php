<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\City;

class cityController extends Controller
{
    // ---------City View----------//
    public Function city(){
        $city = City::orderBy('city_id', 'desc')->get();
        return view('dashboard\page\city\allcity', compact('city'));
    }

    // ---------City Add----------//
    public Function addcity(){
        return view('dashboard\page\city\addcity1');
    }

    public Function store( Request $request ){
        $request->validate([
            'city_name' => 'required|max:100',
        ]);
        $data=[
            'city_name'=> $request->city_name,
        ];
        City::create($data);
        return Redirect::route('addcity')->with('success', 'City Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $city = City::where('city_id', $id)->first();
        return view('dashboard\page\city\updatecity', compact('city'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'city_name' => 'required|max:100',
        ]);
        $data=[
            'city_name'=> $request->city_name,
        ];
        $city = City::where('city_id', $id)->update($data);
        return Redirect::route('city')->with('success', 'City Update Successfull');
    }

// ---------Delete----------//
    public Function delete( $id){
// dd($id);
        $city = City::where('city_id', $id)->find();
        // dd($city);
        $city->delete();
        return Redirect::route('city')->with('success', 'Tuition Update Successfull');
    }
}
