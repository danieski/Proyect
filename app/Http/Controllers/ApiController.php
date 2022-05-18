<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ilumninate\Support\Facades\Auth;
use App\Models\User;
class ApiController extends Controller
{
    public function  register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        
        $user = User::create($validateData);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response([
            'user' => $user,
            'access_token' => $accessToken
        ]);
    }
    public function  login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        
       if (!auth()->attemp($loginData)) {
           return response(['message' => 'Invalid Credetials']);

       }

       $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response([
            'user' => auth()->user(),
            'access_token' => $accessToken
        ]);
    }
}
