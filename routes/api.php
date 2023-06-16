<?php

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


Route::middleware('throttle')->group(function () {
    Route::post('/jumble/{n}', function( Request $request ){ return json_encode( [ "jumbled" => jumble( $request->message, $request->n ) ] );});
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
