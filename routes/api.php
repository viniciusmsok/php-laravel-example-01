<?php

use App\Http\Controllers\Api\v1\PeopleController;
use App\Http\Controllers\Api\v1\TelephonesController;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//  return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('v1')->group(function() {
  Route::get('/people', [PeopleController::class, 'index']);
  Route::get('/people/{id}', [PeopleController::class, 'show']);

  Route::get('/telephones', [TelephonesController::class, 'index']);
  Route::post('/telephones', [TelephonesController::class, 'store']);
  Route::get('/telephones/{telephoneId}', [TelephonesController::class, 'show']);
});