<?php

use App\Http\Controllers\Api\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('Lukowicz/post',[PostController::class,'index']);
Route::get('Lukowicz/post/{post}',[PostController::class,'show']);
Route::post('Lukowicz/post', [PeopleControler::class, 'store']);
Route::put('Lukowicz/post/{post}', [PeopleControler::class, 'update']);
Route::delete('Lukowicz/post/{post}', [PeopleControler::class, 'delete']);

