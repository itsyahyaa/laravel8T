<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class A47 extends Controller
{
    //
    function index(){
        // Return ["name"=>"anil","email"=>"anil@gmail.com","address"=>"Nairobi"];
        return Device::all();
    }
}
