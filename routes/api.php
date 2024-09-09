<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;    
use Illuminate\Support\Facades\Auth;

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
Route::post('login', [LoginController::class,'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
<<<<<<< HEAD
   // return $request->user();
=======
    return $request->user();
>>>>>>> 3caf52eb83def0f4f0e3f86aecf591cddaf05f2b
    return Auth::user();
});
