<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }


    function registerAction(Request $request){
        $fields = $request->validate([
            'name'=> ['required','string','min:2'],
            'email'=>['required','email','string'],
            'password'=>['required','string','between:5,30','confirmed'],
        ]);
        $user = User::create($fields);
        Auth::login($user);
        return redirect()->route('HomePage');
    }
    function loginAction(Request $request){
        $fields = $request->validate([
            'email'=>['required','email','string'],
            'password'=>['required','string','between:5,30'],
        ]);
        if(Auth::attempt($fields)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('AdminHome');
            }
            return redirect()->route('HomePage');
        }
        return back()->with('error','Invalid email or password , please try again');
    }
    function logout(){
        auth::logout();
        return redirect()->route('login');
    }

}
