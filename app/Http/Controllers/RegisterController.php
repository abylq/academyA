<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Traits\RegisterUser;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegisterUser;

    public function show()
    {
        return view('pages.register');
    }

    public function register(RegisterRequest $requestFields)
    {

        $user = $this->registerUser($requestFields);

    }
}
