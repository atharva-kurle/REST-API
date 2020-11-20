<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;

//getting all data - index
Route::get('/home',[InfoController::class,'index']);
//storing data
Route::post('/home',[InfoController::class,'store']);
//showing data
Route::get('/home/{id}',[InfoController::class,'show']);
//update
Route::put('/home/{id}',[InfoController::class,'update']);
//delete
Route::delete('/home/{id}',[InfoController::class,'delete']);
