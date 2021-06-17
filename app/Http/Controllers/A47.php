<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

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

    function update(Request $req){
        $device=Device::find($req->id);
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

    function delete(Request $req){
        $device=Device::find($req->id);
        $result = $device->delete();
        if($result){
            return ["Result"=>"Data has been Deleted"];
        }
        else{
            return ["Result"=>"Data is NOT Deleted"];
        }
        // return ["Result"=>"Data is NOT Deleted".$id];
    }

    function search($name){
        return Device::where("name","like","%".$name."%")->get();
    }

    function testData(Request $req){
        $rules=array(
            "member_id"=>"required|min:1|max:4"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails())
        {
            return $validator->errors();
        }
        else{
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

}
