<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
}
