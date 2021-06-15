<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersControllers extends Controller
{
    //
    function viewLoad()
    {
        $data=['yahya','ali','hussein','yahya','ali'];
        return view('users',['users'=>$data]);
    }
}
