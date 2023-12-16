<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;

class CategoryController extends Controller
{
        // ---------category View----------//
        public Function category(){
            $category = Category::orderBy('category_id', 'desc')->get();
            return view('dashboard.page.category.allcategory', compact('category'));
        }

        // ---------category Add----------//
        public Function addcategory(){
            
            return view('dashboard.page.category.addcategory');
        }

        public Function store( Request $request ){
            $request->validate([
                'category_name' => 'required|max:100',
            ]);
            $data=[
                'category_name'=> $request->category_name,
            ];
            Category::create($data);
            return Redirect::route('addcategory')->with('success', 'Category Add successfull');
        }

        // ---------Update----------//
        public Function edit($id){
            $category = Category::where('category_id', $id)->first();
            return view('dashboard.page.category.updatecategory', compact('category'));
        }

        public Function update(Request $request, $id){
            $request->validate([
                'category_type' => 'required|max:100',
            ]);
            $data=[
                'category_name'=> $request->category_type,
            ];
            Category::where('category_id', $id)->update($data);
            return Redirect::route('category')->with('success', 'Category Update Successfull');
        }

    // ---------Delete----------//
        public Function delete( $id){
            $category = Category::where('category_id', $id)->delete();
            return Redirect::route('category')->with('success', 'Category Update Successfull');
        }
}
