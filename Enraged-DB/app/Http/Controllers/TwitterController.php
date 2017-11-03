<?php

namespace App\Http\Controllers;

use App\Twitter;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTwitterRequest;

class TwitterController extends Controller
{
	
	public function getTwitterProfile($twitterID){

		return Twitter::where('twitterID','=',$twitterID)->latest()->first();
    }
	
	public function postTwitterProfile(StoreTwitterRequest $request) 
    {
		try{
			$twitter = new Twitter;

			$twitter->name = $request->name;
			$twitter->twitterID = $request->twitterID;
			$twitter->pol_var = $request->pol_var;
			$twitter->lib_var = $request->lib_var;
			$twitter->protect =  $request->protect;

			$twitter->save();
		}
		catch(\Exception $e){
			return response()->json('Internal Server Error', 500);
		}
    }
}
