<?php

namespace App\Http\Controllers;
use App\Models\UserSign;
use App\Models\Task;

use Illuminate\Http\Request;

class newTaskController extends Controller
{
    public function show(Request $request, $userid){
        //$userid = $request->username;
        $idcheck = UserSign::where('userid', '=', $userid)->first();

        //$idcheck = UserSign::findOrFail($userid);

        

        $id =1;
        $img_change = Task::where('id', $id)->value('image');
        //return $img_change;

        return view('newTask',compact('idcheck','img_change'));
    }
}
