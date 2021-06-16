<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class M38 extends Controller
{
    //
    function index(){

        $member = new Member;
        $member->name= "john";
        $member->email= "john@gmail.com";
        $member->address= "nairobi";
        $member->save();
    }
}
