<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register.index');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            "first_name" => ["required", "string", "max:255"],
            "last_name" => ["required", "string", "max:255"],
            "email" => ['required', "email", "max:255"],
            "password" => ['required', "string", Password::min(8), "confirmed"],
        ]);

        try {
            
            $user = User::create($validatedData);

            Auth::login($user);

            return redirect('/');

        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Something went wrong!" . $th->getMessage());
        }   

        // validate
        // check if password and re-enter password is the same
        // check username existed
        // if not existed
    }
}
