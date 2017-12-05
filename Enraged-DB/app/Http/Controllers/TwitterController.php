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
        if (empty($twitter) || !$twitter->processed) {
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
    public function addTwitterFollower(Request $request)
    {
        $validatedInput = $request->validate([
            'record_id' => 'required|integer|exists:twitters,id',
            'follows_id' => 'required|integer|exists:twitters,id',
        ]);

        $twitter = Twitter::find($validatedInput['record_id']);
        $twitter->follows()->attach($validatedInput['follows_id']);

        return response()->json([], 200);
    }

    /**
     *
     */
    public function finalizeTwitterProfile(Request $request)
    {
        $validatedInput = $request->validate([
            'record_id' => 'required|integer|exists:twitters,id',
        ]);

        $twitter = Twitter::find($validatedInput['record_id']);
        $twitter->processed = true;

        if (!$twitter->save()) {
            return response()->json(['errors' => ['Unable to update user']], 500);
        }

        return response()->json([], 200);
    }

    /**
     *
     */
    public function hasTwitterProfile($twitterName)
    {
        $twitter = Twitter::where('twitter_name', $twitterName)->latest()->first();

        if (!empty($twitter) && $twitter->processed && $twitter->age < config('ew.twitter.lifetime')) {
            return response()->json($twitter->id, 200);
        }

        return response()->json([], 404);
    }

    /**
     *
     */
    public function hasTwitterProfileById($twitterId)
    {
        $twitter = Twitter::where('twitter_id', $twitterId)->latest()->first();

        if (!empty($twitter) && $twitter->age < config('ew.twitter.lifetime')) {
            return response()->json($twitter->id, 200);
        }

        return response()->json([], 404);
    }

    /**
     *
     */
    public function postTwitterProfile(StoreTwitterRequest $request)
    {
        try{
            $twitter = Twitter::make($request->all());

            $twitter->processed = false;

            if (!$twitter->save()) {
                return response()->json(['errors' => ['Unable to save profile.']], 500);
            }

            return response()->json($twitter->id, 201);
        }
        catch(\Exception $e){
            return response()->json(['errors' => ['Internal Server Error', $e->getMessage()]], 500);
        }
    }
}
