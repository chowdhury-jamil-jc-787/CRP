<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSign;

class userAdminController extends Controller
{
    public function show(Request $request, $userid){
        //$userid = $request->username;
        $idcheck = UserSign::where('userid', '=', $userid)->first();

        //$idcheck = UserSign::findOrFail($userid);

        //return 11;


        return view('userAdmin',compact('idcheck'));
    }
}
