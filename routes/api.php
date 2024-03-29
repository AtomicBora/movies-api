<?php

use App\Http\Controllers\MoviesController;
use GuzzleHttp\Middleware;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// index, show, store, update, delete
Route::middleware('api')->get('/movies', [MoviesController::class, 'index']);
Route::middleware('api')->get('/movies/{movie}', [MoviesController::class, 'show']);
Route::middleware('api')->post('/movies', [MoviesController::class, 'store']);
Route::middleware('api')->put('/movies/{movie}', [MoviesController::class, 'update']);
Route::middleware('api')->delete('/movies/{movie}', [MoviesController::class, 'delete']);
