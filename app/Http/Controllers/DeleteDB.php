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
}
