<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TaxController;
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
Route::get('/tests', [TestController::class, 'index']);
Route::post('/tests', [TestController::class, 'store']);
Route::get('/tests/{id}', [TestController::class, 'show']);
Route::put('/tests/{test}', [TestController::class, 'update']);
Route::delete('/tests/{test}', [TestController::class, 'destroy']);
// Route::apiResource('users', UserController::class);
/**********************************   Test Route Ends Here   *******************************************/
/**********************************   Tax Route Starts Here   *******************************************/
Route::get('/taxes', [TaxController::class, 'index']);
Route::post('/taxes', [TaxController::class, 'store']);
Route::get('/taxes/{id}', [TaxController::class, 'show']);
Route::put('/taxes/{test}', [TaxController::class, 'update']);
Route::delete('/taxes/{test}', [TaxController::class, 'destroy']);
// Route::apiResource('users', UserController::class);
/**********************************   Tax Route Ends Here   *******************************************/
