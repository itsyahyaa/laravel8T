<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UserDatabasesearch extends Controller
{
    //
    function fetchData(){
        return User::all();
    }
}
