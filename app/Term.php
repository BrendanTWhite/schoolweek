<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Support\Facades\Log;

class Term extends Model
{



	public function generateWeeks() 
	{

        // Get a list of all dates between the start of term and the end
        $period = CarbonPeriod::create($this->start_date, $this->end_date);

        // Set up some variables for building the weeks
        $start_of_this_week = null;
        $a_week_is_in_progress = false;
        $week_number = 0;

        // Iterate over the period
        foreach ($period as $date) {

        	if (!$a_week_is_in_progress and !$date->isWeekend() )
        	{
        		// Start a new week
        		$start_of_this_week = $date;
        		$a_week_is_in_progress = true;
        		$week_number ++;
        	}


            if ($a_week_is_in_progress and $date->isWeekend() ) 
            {
                // finish this week and save to database
                $this->weeks()->create([
                	'start_date' => $start_of_this_week,
                	'end_date'   => $date->previous(),
                	'number'     => $week_number,
                ]);

                // reset week in progress flag
                $a_week_is_in_progress = false;
            } // end $a_week_is_in_progress and $date->isWeekend()

            if ($date->isSameDay($this->end_date))
            {
                // finish this week and save to database
                $this->weeks()->create([
                	'start_date' => $start_of_this_week,
                	'end_date'   => $date,
                	'number'     => $week_number,
                ]);
            } // end $date = $this->end_date
            

        } // next date

	} // end function generateWeeks()









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
