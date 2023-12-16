<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Redirect;
use App\Models\StudentClass;
use App\Models\Category;

class classController extends Controller
{
   // ---------Class View----------//
   public Function allclass(){
    $class = StudentClass::orderBy('class_id', 'desc') ->get();
    return view('dashboard.page.class.allclass', compact('class'));
}

// ---------Class Add----------//
public Function addclass(){
    $catagory = Category::get();
    // dd($catagory);
    return view('dashboard.page.class.addclass', ['catagory'=>$catagory]);
}

public Function store( Request $request ){
    // dd($request);
    $request->validate([
        'class_name' => 'required|max:100',
        'category_id' => 'required',
    ]);
    // dd($request);
    StudentClass::create($request->all());
    return Redirect::route('addclass')->with('success', 'Class Add successfull');
}

// ---------Update----------//
public Function edit($id){
    $class = StudentClass::where('class_id', $id)->first();
    $category = Category::all();
    return view('dashboard/page/class/updateclass', compact('class', 'category'));
}

public Function update(Request $request, $id){
    $request->validate([
        'class_name' => 'required|max:100',
        'category_id' => 'required',
    ]);
    $data=[
        'class_name'=> $request->class_name,
        'category_id' => $request->category_id,
    ];

    StudentClass::where('class_id', $id)->update($data);
    return Redirect::route('class')->with('success', 'Class Update Successfull');
}

// ---------Delete----------//
public Function delete( $id){
    StudentClass::where('class_id', $id)->delete();
    return Redirect::route('class')->with('success', 'Class Update Successfull');
}
}
