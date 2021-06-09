<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlForm extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max:10 ',
            'userpassword'=>'required | min:5 '
        ]);
        $output=$req->input();
        return $output; // request that input
    }
}
