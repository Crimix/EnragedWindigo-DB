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
            'user' => $twitter->values,
            'follows' => [],
        ];

        foreach ($twitter->follows as $following) {
            if ($following instanceof Twitter) {
                $data['follows'][] = $following->values;
            }
        }

        return response()->json($data, 200);
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
    public function finalizeTwitterProfile($twitterID)
    {
        //
    }

    /**
     *
     */
    public function hasTwitterProfile($twitterID)
    {
        $twitter = Twitter::where('twitterID', $twitterID)->latest()->first();
        $now = new \DateTime();
        $diff = $now->getTimestamp() - $twitter->updated_at->getTimestamp();

        if (!$twitter->processing && $diff < config('ew.twitter.lifetime')) {
            return response()->json($twitter->id, 200);
        }

        return response()->json(0, 404);
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
