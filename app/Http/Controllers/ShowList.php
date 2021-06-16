<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowList extends Controller
{
    //
    function show(){
        // $data = User::all(); // fetch all data from database
        $data = User::paginate(5);
       return view('list',['Users'=>$data]);

    }
}
