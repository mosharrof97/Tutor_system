<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class adminGuardianController extends Controller
{
    public function guardian(){

        $guardian = User::where('role', 2)->get();
        return View('dashboard.page.guardian.guardian', compact('guardian'));
    }

    public function details($id){

        $guardian = User::where('id', $id)->first();
        return View('dashboard.page.guardian.guardianDetails', compact('guardian'));
    }

    public Function delete( $id){
        User::where('id', $id)->delete();
        return Redirect::route('all_guardian')->with('success', 'Guardian Delete Successfull');
    }
}
