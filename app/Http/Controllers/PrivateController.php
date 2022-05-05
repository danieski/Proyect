<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use lluminate\Support\Facades\Auth;
use App\Models\User;

class PrivateController extends Controller
{
    public function index()
    {
        //return User::all();
        $data = User::all();
        return view('private',['Users' => $data]);
    }
    public function delete($id)
    {
        
        $data = User::find($id);
        $data -> delete();
        return redirect('private');
    }

}
