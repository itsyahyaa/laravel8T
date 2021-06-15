<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestMethod extends Controller
{
    //
    function index(request $req){
        return $req->input();
    }
}
