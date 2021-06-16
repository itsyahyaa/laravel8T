<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class M31 extends Controller
{
    //
    function operations()
    {
        return DB::table('members')->min('name');
    }
}
