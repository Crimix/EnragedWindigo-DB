<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request) 
    {
        $user = new User;

        $user->name = $request->name;
        $user->password = $request->password; //Storing in plain text is bad, but for now it will do

        $user->save();
    }
}
