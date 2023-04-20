<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/**********************************   Test Route Starts Here   *******************************************/
Route::get('/tests', 'TestController@index');
Route::post('/tests', 'TestController@store');
Route::get('/tests/{test}', 'TestController@show');
Route::put('/tests/{test}', 'TestController@update');
Route::delete('/tests/{test}', 'TestController@destroy');
/**********************************   Test Route Ends Here   *******************************************/
