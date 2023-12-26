<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Tuitor;
use App\Models\Tuition;
use App\Models\City;
use App\Models\Category;
use App\Models\Student;
use App\Models\Day;
use App\Models\SocialMedia;
use App\Models\Subject;
use App\Models\StudentClass;
use App\Models\Location;
use App\Models\Apply;

class tuitorController extends Controller
{
    // ---------Tuitor View----------//
    public Function tuitor(){
        $tuitor = Tuitor::orderBy('tuitor_id', 'desc')->get();
        return view('dashboard\page\tuitor\alltuitor', compact('tuitor'));
    }

    // ---------Tuitor Add----------//
    public Function addtuitor( Request $request){
        $data=[
            'tuition' =>Tuition::orderBy('tuition_name', 'ASC')->get(),
            'city' =>City::orderBy('city_name', 'ASC')->get(),
            'category' =>Category::orderBy('category_name', 'ASC')->get(),
            'student' =>Student::orderBy('nb_of_student', 'ASC')->get(),
            'day' =>Day::orderBy('day_name', 'ASC')->get(),
            'social' =>SocialMedia::orderBy('social_name', 'ASC')->get(),
        ];

     return view('dashboard.page.tuitor.addtuitor', $data);
    }


    public Function childOption( Request $request){

            $class= StudentClass::where('category_id', $request->category_id)->orderBy('class_name', 'ASC')->get();
            $subject=Subject::where('class_id', $request->class_id)->orderBy('subject_name', 'ASC')->get();
            $location=Location::where('city_id', $request->city_id)->orderBy('location_name', 'ASC')->get();
        
        return response()->json([
            'status'=> true,
            'class' =>$class,
            'subject' =>$subject,
            'location' =>$location,
        ]);
    }

    public Function store( Request $request ){
        $request->validate([
            'tuition_id' => 'required',
            'city_id' => 'required',
            'location_id' => 'required',
            'category_id' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
            'student_gender' => 'required|max:100',
            'tuitor_gender' => 'required|max:100',
            'address' => 'required|max:200',
            'institute_name' => 'required|max:200',
            'student_id' => 'required',
            'day_id' => 'required',
            'tuition_time' => 'required',
            'hire_date' => 'required',
            'salary' => 'required|numeric',
            'social_id' => 'required',
        ]);

        // dd($request);
        // $data=[
        //     'tuitor_name'=> $request->tuitor_name,
        // ];
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        Tuitor::create($data);
        return Redirect::route('addtuitor')->with('success', 'tuitor Add successfull');
    }

    // ---------Update----------//
    public Function edit($id){
        $data=[
            'tuitor' => Tuitor::where('tuitor_id', $id)->first(),
            'tuition' =>Tuition::orderBy('tuition_name', 'ASC')->get(),
            'city' =>City::orderBy('city_name', 'ASC')->get(),
            'category' =>Category::orderBy('category_name', 'ASC')->get(),
            'student' =>Student::orderBy('nb_of_student', 'ASC')->get(),
            'day' =>Day::orderBy('day_name', 'ASC')->get(),
            'social' =>SocialMedia::orderBy('social_name', 'ASC')->get(),
            'class'=> StudentClass::orderBy('class_name', 'ASC')->get(),
            'subject'=>Subject::orderBy('subject_name', 'ASC')->get(),
            'location'=>Location::orderBy('location_name', 'ASC')->get(),
        ];
        return view('dashboard.page.tuitor.updatetuitor', $data);
    }

    public Function update(Request $request, $id ){
        $request->validate([
            'tuition_id' => 'required',
            'city_id' => 'required',
            'location_id' => 'required',
            'category_id' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
            'student_gender' => 'required|max:100',
            'tuitor_gender' => 'required|max:100',
            'address' => 'required|max:200',
            'institute_name' => 'required|max:200',
            'student_id' => 'required',
            'day_id' => 'required',
            'tuition_time' => 'required',
            'hire_date' => 'required',
            'salary' => 'required|numeric',
            'social_id' => 'required',
        ]);

        $data=[
            // 'tuition_id' => $request->tuition_id,
            // 'city_id' => $request->city_id,
            // 'location_id' => $request->location_id,
            // 'category_id' => $request->category_id,
            // 'class_id' => $request->class_id,
            // 'subject_id' => $request->subject_id,
            // 'student_gender' => $request->student_gender,
            // 'tuitor_gender' => $request->tuitor_gender,
            // 'address' => $request->address,
            // 'institute_name' => $request->institute_name,
            // 'student_id' => $request->student_id,
            // 'day_id' => $request->day_id,
            // 'tuition_time' => $request->tuition_time,
            // 'hire_date' => $request->hire_date,
            'salary' => $request->salary,
            // 'social_id' => $request->social_id,
        ];

// dd($data);
        Tuitor::where('tuitor_id', $id)->update( $data);
        return Redirect::route('tuitor')->with('success', 'Tuitor Update Successfull');
    }

    // ---------Delete----------//
    public Function delete( $id){
        Tuitor::where('tuitor_id', $id)->delete();
        return Redirect::route('tuitor')->with('success', 'Tuitor Delete Successfull');
    }


    // -----------Job Seeker-------------
    public function jobSeeker($id){
        $data['jobSeeker']= Apply::where('tuitor_id', $id)->orderBy('id','ASC')->get();
        return view('dashboard.page.tuitor.jobSeeker', $data);
    }
}
