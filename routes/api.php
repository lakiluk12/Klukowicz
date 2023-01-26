<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/lukowicz/post',[PostController::class,'index']);
Route::get('/lukowicz/post/{post}',[PostController::class,'show']);
Route::post('/lukowicz/post', [PostController::class, 'store']);
Route::put('/lukowicz/post/{post}', [PostController::class, 'update']);
Route::delete('/lukowicz/post/{post}', [PostController::class, 'destroy']);

