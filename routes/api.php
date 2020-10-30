<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('/login', 'AuthController@login');
    Route::delete('/logout', [AuthController::class, 'logout']);
});


//
//Route::group([
//    'prefix'=>"v1",
//    "middleware"=>"api"
//],function ($route){
//    $route->get();
//    $route->group([
//        'prefix'=>"home"
//    ],function ($home){
//        $home->get("/","");
//        $home->get("/{id}","");
//        $home->put("/{id}","");
//        $home->post("/{id}","");
//    });
//
//    $route->group([
//        'prefix'=>"about"
//    ],function ($home){
//        $home->get("/","");
//        $home->get("/{id}","");
//        $home->put("/{id}","");
//        $home->post("/{id}","");
//    });
//
//});
