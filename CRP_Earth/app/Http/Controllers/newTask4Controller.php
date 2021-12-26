<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSign;
use App\Models\Task;

class newTask4Controller extends Controller
{
    public function show($userid)
    {
        $idcheck = UserSign::where('userid', '=', $userid)->first();
        $old_package = UserSign::where('userid', $userid)->value('package');
        $task_complete = 10+$old_package ;

        $package_Update = UserSign::where("userid", $userid)->update(['package' => $task_complete]);

        $id =4;
        $img_change = Task::where('id', $id)->value('image');

        return view('newTask4',compact('idcheck','img_change'));

    }
}
