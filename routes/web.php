
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\USersControllers;
use App\Http\Controllers\HtmlForm;
use App\Http\Controllers\UserDatabase;
use App\Http\Controllers\UserDatabasesearch;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\HttpRequestMethod;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\Upload;
use App\Http\Controllers\ShowList;
use App\Http\Controllers\SaveDb;
use App\Http\Controllers\DeleteDB;
use App\Http\Controllers\M31;
use App\Http\Controllers\M37;
use App\Http\Controllers\M38;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { // / is url
    return view('welcome'); //this is where to show which page should be ie index page
});


 // url for hello
// Route:: get('/hello',function(){
//     return view('hello');
// });
// simple url and page name
Route::view("hello",'hello');

//url for contact
// Route:: get('/contact',function(){
//     return view('contact');
// });


// simple url ()1st and page(2nd) name
Route::view("contact",'contact');

//name is define in the url
Route::get('/user/{name}', function ($name) { // / is url
    //echo $name;
    return view('name',['name'=>$name]); //this is where to show which page should be index
});

// url from Controllers
Route::get("yahya/{user}",[Users::class,'index']);

Route::get("user1",[UsersControllers::class,'viewLoad']);

// get method

//Route::post("htmlform",[HtmlForm::class,'getData']);
//  Route::view("login","htmlform");



// Route::view("hello","hello");
// Route::view("user","user");
// Route::view("htmlform","htmlform");

Route::group(['middleware'=>['protectedPage']],function(){
    Route::view('user','user');
});


Route::get("Database",[UserDatabase::class,'index']);

Route::get("search",[UserDatabasesearch::class,'fetchData']);


Route::get("Http",[HttpController::class,'index']);

//Route::post("login",[HttpRequestMethod::class,'index']);
Route::post("log",[HtmlForm::class,'getData']);
Route::view("login1","login");
Route::view("inner","inner");

// **** **** ///
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('inner');
    }
    return view('login1');
});


Route::get('/logout', function () {
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login1');
});


Route::view("add","add");
Route::post("Addmember",[AddMember::class,'add']);



Route::view("upload","upload");
Route::post("file",[Upload::class,'index']);


Route::view("profile","profile");


Route::view("list","list");
Route::get("list",[ShowList::class,'show']);


Route::view("savedb","saveDb");
Route::post("savedb",[SaveDb::class,'addData']);



Route::get("remove",[DeleteDb::class,'list']);
Route::get("delete/{id}",[DeleteDb::class,'delete']);


Route::get("edit/{id}",[DeleteDb::class,'showData']);
Route::post("update",[DeleteDb::class,'addData']);

Route::get("m31",[M31::class,'operations']);


Route::get("m37",[M37::class,'index']);

Route::get("m38",[M38::class,'index']);
