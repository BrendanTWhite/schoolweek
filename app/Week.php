<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['number', 'start_date', 'end_date'];

    /**
     * Get the term that owns the week.
     */
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date',
        'end_date',
    ];
    
}
