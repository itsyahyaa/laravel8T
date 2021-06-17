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
    
    function add(Request $req){
        $device = new Device;
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if($result){
            return ["Result"=>"Data has been saved"];
        }
        else{
            return ["Result"=>"Data is NOT saved"];
        }
    }
}
