<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

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
}
