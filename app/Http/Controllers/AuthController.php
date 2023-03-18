<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
USE App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function signup()
    {
        return view('auth.register');
    }
    // login function
public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|max:255',
        ]);

        $user = User::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }

        auth()->login($user);

        return redirect()->route('posts')->with('message', 'You are logged in!');
    }
    // logout function
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('message', 'You are logged out!');
    }

    // register function
    public function register(Request $request)
    {

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|min:5',
            ]);
            if($validator->fails()){
                return Redirect::back()->withErrors($validator);
            }
            else{
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                auth()->login($user);
                return redirect()->route('posts')->with('message', 'User created successfully!');
            }
    }
}
