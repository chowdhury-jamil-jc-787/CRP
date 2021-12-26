<?php

namespace App\Http\Controllers;
use App\Models\UserSign;
use App\Models\Task;

use Illuminate\Http\Request;

class newTask6Controller extends Controller
{
    public function show($userid)
    {
        $idcheck = UserSign::where('userid', '=', $userid)->first();
        $old_package = UserSign::where('userid', $userid)->value('package');
        $task_complete = 10+$old_package ;

        $package_Update = UserSign::where("userid", $userid)->update(['package' => $task_complete]);

       

        return redirect('/userAdmin/$userid',compact('idcheck'));

    }
}
