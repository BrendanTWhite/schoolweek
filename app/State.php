<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
	
    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['term'];






    /**
     * Get the terms for the state.
     */
    public function terms()
    {
        return $this->hasMany('App\Term');
    }

}
