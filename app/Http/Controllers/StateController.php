<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Eluceo\iCal\Component\Calendar;

class StateController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  int  $code
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('state.view', [
            'state' => State::where('code', $code)->firstOrFail()
        ]);
    }

    /**
     * Build the specified calendar.
     *
     * @param  int  $code
     * @return \Illuminate\Http\Response
     */
    public function ical($code)
    {

        // Get the state for this code
        $theState = State::where('code', $code)->firstOrFail();
        // Build a Calendar for this state
        $calendar = new Calendar(URL::current());

        // Loop through the weeks for the terms for this state
        $terms = $theState->terms;
        foreach ($terms as $term) 
        {
            $weeks = $term->weeks;
            foreach ($weeks as $week)
            {
                $calendar->addComponent($week->event());
            }
        }

        // Now return this calendar
        header('Content-Type: text/calendar; charset=utf-8');
        header('Content-Disposition: attachment; filename="'.$theState->code.'.ics"');
        echo $calendar->render();
    }

}
