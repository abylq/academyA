<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{

    public function show()
    {
        return view('pages.login');
    }

    public function login(LoginRequest $loginRequest)
    {
        $attributes = $loginRequest->only(['email','password']);

        if(Auth::attempt($attributes))
        {
            return redirect('/');
        }
    }
    
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return back();
    }
}
