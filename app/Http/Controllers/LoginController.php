<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin(){
        return view('page.login');
    }
    public function loginUser(Request $request){
        $data = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($data)){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('status','No Credentials Found! Please Check you Input!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
