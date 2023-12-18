<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\SocialMedia;

class socialMediaController extends Controller
{
        // ---------Social Media View----------//
        public Function social(){
            $social = SocialMedia::orderBy('social_id', 'desc')->get();
            return view('dashboard\page\social_media\allsocial_media', compact('social'));
        }
    
        // ---------Social Media Add----------//
        public Function addsocial(){
            return view('dashboard.page.social_media.addsocial_media');
        }
    
        public Function store( Request $request ){
            $request->validate([
                'social_name' => 'required|max:100',
            ]);
            $data=[
                'social_name'=> $request->social_name,
            ];
            SocialMedia::create($data);
            return Redirect::route('addsocial')->with('success', 'Social Media Add successfull');
        }
    
        // ---------Update----------//
        public Function edit($id){
            $social = SocialMedia::where('social_id', $id)->first();
            return view('dashboard.page.social_media.updatesocial_media', compact('social'));
        }
    
        public Function update(Request $request, $id){
            $request->validate([
                'social_name' => 'required|max:100',
            ]);
            $data=[
                'social_name'=> $request->social_name,
            ];
            SocialMedia::where('social_id', $id)->update($data);
            return Redirect::route('social')->with('success', 'Social Media Update Successfull');
        }
    
    // ---------Delete----------//
        public Function delete( $id){
            SocialMedia::where('social_id', $id)->delete();
            return Redirect::route('social')->with('success', 'Social Media Delete Successfull');
        }
    
    
}
