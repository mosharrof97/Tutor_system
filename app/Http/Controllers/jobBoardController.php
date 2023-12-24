<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tuitor;
use App\Models\Apply;

class jobBoardController extends Controller
{
     public function jobboard()
    {
        $data['tuitor'] = Tuitor:: where('status', 0 )->paginate(30);
        return view ('jobBoard.page.jobboard' , $data);
    }

    public function jobDetails($id){
        $data['tuitor'] = Tuitor:: where('tuitor_id', $id)->first();
        
        $data['applied'] = Apply::where('tuitor_id',$id)->where('user_id',  Auth::user()->role)->first();
        return view('jobBoard.page.jobDetails', $data);
    }

    // public function apply($id){
    //     dd($id);
    //     $userRole = Auth::user()->role;
    //     if( $userRole == 2){
    //         if( $userRole == 3){

    //         }else{
    
    //         }
    //     }else{
    //         // return back()->route('jobdetails')->with('error', 'You cannot apply');
    //         return 'Hello';
    //     }
    // }

}
