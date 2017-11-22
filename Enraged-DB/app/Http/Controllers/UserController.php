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
            $user = User::create([
                'name' => $request->name,
                'password' => bcrypt($request->password),
            ]);

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
