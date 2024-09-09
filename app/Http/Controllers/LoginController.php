<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){

    
    $user = User::where('email', $request('email'))->first() ;

    if($user && Hash::check($request('password'),$user->password)){
        $token = $user->createToken('login');
        return[
            'token'=> $token->plainTextToken,
        ]
        ;
   } 
     return response ()->json([
    'message' => 'Invalid Credencials'
   ],401);
 }
}
