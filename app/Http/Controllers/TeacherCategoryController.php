<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\TeacherCategory;

class TeacherCategoryController extends Controller
{
        // ---------category View----------//
        public Function category(){
            $category = TeacherCategory::orderBy('category_id', 'desc')->get();
            return view('dashboard.page.techer_category.allteacher', compact('category'));
        }

        // ---------category Add----------//
        public Function addteacher(){
            // return view('dashboard.page.teacher_category.addteacher');
            return view('dashboard.page.techer_category.addteacher');
        }

        public Function store( Request $request ){
            $request->validate([
                'category_type' => 'required|max:100',
            ]);
            $data=[
                'category_name'=> $request->category_type,
            ];
            TeacherCategory::create($data);
            return Redirect::route('addteacher')->with('success', 'teacher Add successfull');
        }

        // ---------Update----------//
        public Function edit($id){
            $category = TeacherCategory::where('category_id', $id)->first();
            return view('dashboard\page\teacher_category\addteacher', compact('category'));
        }

        public Function update(Request $request, $id){
            $request->validate([
                'category_type' => 'required|max:100',
            ]);
            $data=[
                'category_name'=> $request->category_type,
            ];
            TeacherCategory::where('category_id', $id)->update($data);
            return Redirect::route('category')->with('success', 'category Update Successfull');
        }

    // ---------Delete----------//
        public Function delete( $id){
            $category = TeacherCategory::where('category_id', $id)->delete();
            return Redirect::route('category')->with('success', 'category Update Successfull');
        }
}
