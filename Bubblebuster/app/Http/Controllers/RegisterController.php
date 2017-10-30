<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreServiceUserRequest;

use App\ServiceUser;

class RegisterController extends Controller
{
    public function register(StoreServiceUserRequest $request)
	{
		$serviceUser = new ServiceUser;

		$serviceUser->service_name = $request->service_name;

		$serviceUser->password = bcrypt($request->password);

		$serviceUser->save();
	}
}
