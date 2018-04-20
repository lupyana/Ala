<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class accountController extends Controller
{
    public function activate( Request $request, $token){

             $userToken  =  \App\UserToken::where('token' , $token)->first();

             if ($userToken){
               $userToken->status = 1;
               $userToken->save();

               Auth::loginUsingId($userToken->user_id);

               return redirect('/home')->with('success' , 'Your account has been activated');
             }else{
                  return redirect('/register')->with('error' , 'Invalid Token provided, are you a registered user?');
             }
    }
}
