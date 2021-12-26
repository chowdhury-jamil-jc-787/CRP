<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSign;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function check(Request $request)
    {
        $userid = $request->username;
        $userpass = $request->password;


        $idcheck = UserSign::where('userid', '=', $request->input('username'))->first();

        $pass = UserSign::where('userid', $userid )->value('password');

        

      if ($idcheck === null) {

        return back()->with('wrong', 'user id does not exist');

        }

        else{
            


            if(Hash::check($userpass,$pass)){
                return view('userAdmin',compact('idcheck'));
             }
             else{
                 return back()->with('error', 'password does not match');
             }
        }





        
    }
}
