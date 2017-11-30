<?php

namespace App\Http\Controllers;

use App\Twitter;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTwitterRequest;

class TwitterController extends Controller
{
    /**
     *
     */
    public function getTwitterProfile(Twitter $twitter)
    {
        if (empty($twitter)) {
            return response()->json(['errors' => ['Profile not found!']], 404);
        }

        $twitter->load('follows');

        $data = [
            'user' => $twitter->pol_var,
            'follows' => []
        ];

        foreach ($twitter->follows as $following) {
            //
        }
    }

    /**
     *
     */
    public function addTwitterFollower()
    {
        //
    }

    /**
     *
     */
    public function hasTwitterProfile($twitterID)
    {

    }

    /**
     *
     */
    public function postTwitterProfile(StoreTwitterRequest $request)
    {
        try{
            $twitter = new Twitter;

            $twitter->name = $request->name;
            $twitter->twitterID = $request->twitterID;
            $twitter->pol_var = $request->pol_var;
            $twitter->protect =  $request->protect;

            $twitter->save();
        }
        catch(\Exception $e){
            return response()->json(['errors' => ['Internal Server Error']], 500);
        }
    }
}
