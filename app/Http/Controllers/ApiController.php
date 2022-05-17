<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ilumninate\Support\Facades\Auth;

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
}
