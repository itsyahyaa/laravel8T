<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class SaveDb extends Controller
{
    // add data to database
    function addData(Request $req){
        $user = new Member;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->address=$req->address;
        $user->save();
        return redirect('savedb');
    }
}
