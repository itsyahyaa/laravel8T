<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;


class DeleteDB extends Controller
{
    // fetch data from database
    function list(){
        $data = Member::all(); // fetch all data from database
         //$data = User::paginate(5);
         return view('list',['members'=>$data]);
    }

        // delete data from database
    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('remove');
    }

    function showData($id){
        $data = Member::find($id);
        return view('edit', ['data'=>$data]);
    }
    function addData(Request $req){
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('remove');

    }

}
