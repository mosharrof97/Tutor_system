<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Apply;

class acceptedController extends Controller
{
    public function acceptedData(){
        $data['acceptedData'] = Apply::where('status', 1)->orderby('id','desc')->get();
        return View('dashboard.page.Job_Apply_Approved.acceptedData', $data);
    }

    // public function acceptedDetails($id){
    //     $gdnrole = User::where('role', 2)->get();
    //     // $data['tuitorDetails'] = Apply::where('id', $id)->where('user_id')->first();
    //     $data = [
    //         'acceptedDetails' => Apply::where('id', $id)->where('user_id', $gdnrole )->find(),
    //     ];
    //     return View('dashboard.page.Job_Apply_Approved.acceptedDetails', $data);
    // }
    public function acceptedDetails($id){
        // $gdnroleIds = User::where('role', 2)->pluck('id')->toArray();
    
        $data = [
            // 'acceptedDetails' => Apply::where('id', $id)->with('tuitor.user')->get(),
            'acceptedDetails' => Apply::where('id', $id)->first(),
        ];

        return View('dashboard.page.Job_Apply_Approved.acceptedDetails', $data);
    }
}
