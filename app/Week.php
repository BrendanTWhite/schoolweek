<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    






    /**
     * Get the term that owns the week.
     */
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

}
