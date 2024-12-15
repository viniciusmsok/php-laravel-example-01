<?php

use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v1\UserController;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//  return $request->user();
//})->middleware('auth:sanctum');

Route::prefix('v1')->group(function() {
  Route::get('/users', [UserController::class, 'index']);
  Route::get('/users/{id}', [UserController::class, 'show']);

  Route::get('/customers', [CustomerController::class, 'index']);
  Route::get('/customers/{customerId}', [CustomerController::class, 'show']);
});
