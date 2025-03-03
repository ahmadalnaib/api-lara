<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return  response()->json(['user' => 'John Doe']);
},200);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
