<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['weeks'];

    /**
     * Get the state that owns the term.
     */
    public function state()
    {
        return $this->belongsTo('App\State');
    }

    /**
     * Get the weeks for the term.
     */
    public function weeks()
    {
        return $this->hasMany('App\Week');
    }

}
