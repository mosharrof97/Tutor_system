<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Tuitor;

class jobBoardController extends Controller
{
     public function jobboard()
    {
        $data['tuitor'] = Tuitor:: where('status', 0 )->paginate(30);
        return view ('jobBoard.page.jobboard' , $data);
    }

    public function jobDetails($id){
        $data['tuitor'] = Tuitor:: where('tuitor_id', $id)->first();
        return view('jobBoard.page.jobDetails', $data);
    }

    public function apply($id){
        $userRole = Auth::user()->role;
        if( $userRole == 3){
            if( $userRole == 3){

            }else{
    
            }
        }else{

        }
    }

}
