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
        'name', 'twitterID', 'pol_var', 'lib_var', 'protect', 'fpol_var', 'flib_var',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
