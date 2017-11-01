<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
	
	public function register(StoreUserRequest $request) 
    {
		try{
			$user = new User;

			$user->name = $request->name;
			$user->password = $request->password; //Storing in plain text is bad, but for now it will do

			$user->save();
		}
		catch(\Exception $e){
			return response()->json('Internal Server Error', 500);
		}
    }
	
    public function getProfile($id){

        return User::find($id);
    }
}
