<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function show()
    {
        return view('task');
    }
}
