<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ilumninate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function login (Request $request){
        $login = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        if( !Auth::attempt( $login )) {
            return response([ 'message' => 'Invalid credecials']);
        }
        $accessToken = Auth::user()->createToken('authToken')->accessToken;
        
        return response(['user' => Auth::user(), 'access_token' => $accessToken]);
    }
}
