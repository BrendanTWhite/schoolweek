<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eluceo\iCal\Component\Event;

class Week extends Model
{


    public function event()
    {
        $event = new Event();

        $event
            ->setDtStart($this->start_date)
            ->setDtEnd($this->end_date)
            ->setUseUtc(false)
            ->setNoTime(true)
            ->setSummary('Week '.$this->number);

        return $event;
    }

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
