<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class M39 extends Controller
{
    //
    function index(){
        return Member::find(3)->getDevice; // get data from Device and Member
    }
}
