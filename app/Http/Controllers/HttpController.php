<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    function index(){
        return Http::get("https://http://127.0.0.1:8000/search");
    }
}
