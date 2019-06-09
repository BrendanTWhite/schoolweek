<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Week;
use App\Term;

class WeekController extends Controller
{
    /**
     * Delete and re-generate weeks for all terms.
     *
     * @return \Illuminate\Http\Response
     */
    public function generate()
    {
        // First, find terms that don't have weeks yet
        $terms = Term::doesntHave('weeks')->get();

        // Loop through the terms, generating weeks for each
        foreach ($terms as $term) {
            $term->generateWeeks();
        }

        return ('done');
    }

}
