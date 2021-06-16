<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HtmlForm extends Controller
{
    //
    function getData(Request $req)
    {
        // $req->validate([
        //     'user'=>'required | max:10 ',
        //     'password'=>'required | min:5 '
        // ]);

        $data= $req->input(); // request that input
        $req->session()->put('user',$data['user']); // fetch specific data of user from the input
       // echo session('user');
       return redirect('inner');
    }
}
