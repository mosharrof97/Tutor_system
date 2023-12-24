<?php

namespace App\Http\Controllers\tuitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Apply;

class applyController extends Controller
{
    
    public function apply($id){
        
        $userRole = Auth::user()->role;
        // $applied = Apply::where('tuitor_id',$id)->where('user_id',  $userRole)->first();
        // dd($userRole);
        if( $userRole == 3){
            // if( $applied ){
            //     return Redirect::route('jobdetails',$id)->with('error', 'All Ready Applied');
            // }else{
                $data = [
                    'tuitor_id' => $id,
                    'user_id' => Auth::user()->id,
                ];
                Apply::create($data);
                return Redirect::route('jobdetails',$id)->with('success', 'Apply Successfull.');
            // }
        }else{
            return Redirect::route('jobdetails',$id)->with('error', 'You cannot apply');
        }
    }        

    public function jobSeeker($id){
        $data['jobSeeker']= Apply::where('tuitor_id', $id)->orderBy('id','ASC')->get();
        return view('guardian\pages\tuitor\jobSeeker', $data);
    }

    public function accept($id){
        $status = Apply::where('id', $id)->where('status', 0)->first();
        if($status ){
            $data=[
                'status'=> 1,
            ];
            Apply::where('id', $id)->update($data);

            return back()->with('success', 'Application Accepted');
        }else{
            return back()->with('error', 'Something is wrong !');
        }
    }    
}
