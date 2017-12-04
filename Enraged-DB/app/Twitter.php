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
        'twitter_name', 'twitter_id', 'analysis_val',
        'mi_val', 'sentiment_val', 'media_val',
        'tweet_count', 'protect', 'processed'
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
            'record_id'     => $this->id,
            'twitter_name'  => $this->twitter_name,
            'twitter_id'    => $this->twitter_id,
            'analysis'      => $this->analysis_val,
            'media'         => $this->media_val,
            'mi'            => $this->mi_val,
            'sentiment'     => $this->sentiment_val,
            'tweet_count'   => $this->tweet_count,
            'updated_at'    => $this->updated_at,
        ];
    }

    public function getAgeAttribute()
    {
        $now = new \DateTime();
        return ($now->getTimestamp() - $this->updated_at->getTimestamp());
    }
}
