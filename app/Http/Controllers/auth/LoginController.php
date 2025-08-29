<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            "email" => ['required', "email", "max:255"],
            "password" => ['required'],
        ]);

        // attemp to login
        if (! Auth::attempt($validatedData)){
            throw ValidationException::withMessages([
                'email' => 'Invalid Credentials'
            ]);
        }
        // regenerate session
        request()->session()->regenerate();
        //redirect

        return redirect('/');
    }
}
