<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\A47;
use App\Http\Controllers\A54;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("a47",[A47::class,'index']);

Route::Post("a49",[A47::class,'add']);

Route::put("a50",[A47::class,'update']);

Route::delete("a51/{id}",[A47::class,'delete']);

Route::get("a52/{name}",[A47::class,'search']);

Route::Post("a53",[A47::class,'testData']);

Route::apiResource("a54",A54::class);
