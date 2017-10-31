<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TwitterController extends Controller
{
    public function getProfile($id){

        return User::find($id);
    }
}
