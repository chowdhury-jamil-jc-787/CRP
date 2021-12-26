<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSign;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class signupUserController extends Controller
{
    public function check(Request $request)
    {
       $newMember = new UserSign;

       $emailcheck = UserSign::where('userid', '=', $request->input('userid'))->first();
       $referralcheck = UserSign::where('referral', '=', $request->input('referral'))->first();

       if ($emailcheck === null) {

        if ($referralcheck === null) {

            return back()->with('wrong', 'Referral id does not exist');



        }

        else{

            $newMember->userid = $request->userid;
        $newMember->name = $request->name;
        $newMember->email = $request->email;
        $newMember->password = Hash::make($request->password);
        $newMember->phone = $request->phone;
        $newMember->package = 1000;
        $gender = $request->input('gender');
        $newMember->gender = $gender;
        
        $newMember->referral = $request->referral;
        $newMember->country = "Bangladesh";
        
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/images/',$name);
        
        $newMember->image = $name;
       
        $newMember->save();

        
        return redirect('userLogin');

        }




       
       } else {
        return back()->with('error', 'UserID already used');
       }

        



        
       



    }
}
