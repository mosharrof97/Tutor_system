<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Location;
use App\Models\City;

class locationController extends Controller
{
    // ---------Location View----------//
    public Function location(){
        $location = Location::join('cities', 'cities.city_id','=','locations.city_id')
                                                ->orderBy('location_id', 'desc')
                                                ->get();
        return view('dashboard.page.location.alllocation', compact('location'));
    }

    // ---------Location Add----------//
    public Function addlocation(){
        $city = City::get();
        return view('dashboard.page.location.addlocation', ['citys'=>$city]);
    }

    public Function store( Request $request ){
        $request->validate([
            'location_name' => 'required|max:100',
            'city_id' => 'required',
        ]);
        // $data=[
        //     'location_name'=> $request->location_name,
        //     'city_id' => $request->city_id,
        // ];
        Location::create($request->all());
        return Redirect::route('addlocation')->with('success', 'Location Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $location = Location::where('location_id', $id)->first();
        $city = City::all();
        return view('dashboard/page/location/updatelocation', compact('location', 'city'));
    }

    public Function update(Request $request, $id){
        $request->validate([
            'location_name' => 'required|max:100',
            'city_id' => 'required',
        ]);
        $data=[
            'location_name'=> $request->location_name,
            'city_id' => $request->city_id,
        ];

        Location::where('location_id', $id)->update($data);
        return Redirect::route('location')->with('success', 'Location Update Successfull');
    }

// ---------Delete----------//
    public Function delete( $id){
        $location = Location::where('location_id', $id)->delete();
        return Redirect::route('location')->with('success', 'Location Update Successfull');
    }
}
