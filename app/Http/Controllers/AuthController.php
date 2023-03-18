<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $cred = $request->only('email', 'password');
    
    if (Auth::attempt($cred)) {
        return redirect()->route('posts');
    }



    return redirect()->back()->with('error', 'Invalid login credentials!');
}
}
