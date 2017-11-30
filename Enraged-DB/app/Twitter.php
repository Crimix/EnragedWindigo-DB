<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Twitter extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'twitterID', 'pol_var', 'protect',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongToMany
     */
    public function follows()
    {
        return $this->belongsToMany('App\Twitter', 'twitter_twitter', 'twitter_id', 'follows_id', 'id', 'id');
    }
}
