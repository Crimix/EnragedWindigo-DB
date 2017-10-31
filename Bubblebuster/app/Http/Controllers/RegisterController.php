<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreUserRequest;

use App\User;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
	{
		$user = new User;

		$user->name = $request->name;

		$user->password = bcrypt($request->password);

		$user->save();
	}
}
