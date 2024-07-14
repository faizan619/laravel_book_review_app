<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('page.register');
    }

    public function registerUser(Request $request){
        // return $request;
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed'
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('login');
    }
}
