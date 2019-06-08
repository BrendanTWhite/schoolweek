<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{









    /**
     * Get the state that owns the term.
     */
    public function state()
    {
        return $this->belongsTo('App\State');
    }

}
