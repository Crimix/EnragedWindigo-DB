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
        'name', 'twitterID', 'analysis_val',
        'mi_val', 'sentiment_val', 'media_val',
        'tweet_count', 'protect',
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

    public function getValuesAttribute()
    {
        return [
            'analysis'      => $this->analysis_val,
            'media'         => $this->media_val,
            'mi'            => $this->mi_val,
            'sentiment'     => $this->sentiment_val,
            'tweet_count'   => $this->tweet_count,
        ];
    }
}
