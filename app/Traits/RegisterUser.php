<?php


namespace App\Traits;

use App\Entity\User\User;

trait RegisterUser
{
    public function registerUser($fields)
    {
      	
      	
      	$user = User::create([
            'name'      => $fields->name,
            'email'     => $fields->email,
            'password'  => $fields->password
        ]);

        return $user;
    }
}
