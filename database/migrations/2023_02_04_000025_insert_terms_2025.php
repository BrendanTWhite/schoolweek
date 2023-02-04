<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2025 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'act')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Friday 31 January 2025'),
                'end_date'   => new Carbon('Friday 11 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 28 April 2025'),
                'end_date'   => new Carbon('Friday 4 July 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 21 July 2025'),
                'end_date'   => new Carbon('Friday 26 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 13 October 2025'),
                'end_date'   => new Carbon('Thursday 18 December 2025'),
            ],
        ]);

        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Friday 31 January 2025'),
                'end_date'   => new Carbon('Friday 11 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 28 April 2025'),
                'end_date'   => new Carbon('Friday 4 July 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 21 July 2025'),
                'end_date'   => new Carbon('Friday 26 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 13 October 2025'),
                'end_date'   => new Carbon('Friday 19 December 2025'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wednesday 29 January 2025'),
                'end_date'   => new Carbon('Friday 4 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 14 April 2025'),
                'end_date'   => new Carbon('Friday 20 June 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 15 July 2025'),
                'end_date'   => new Carbon('Friday 19 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 6 October 2025'),
                'end_date'   => new Carbon('Friday 12 December 2025'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 28 January 2025'),
                'end_date'   => new Carbon('Friday 4 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 22 April 2025'),
                'end_date'   => new Carbon('Friday 27 June 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 14 July 2025'),
                'end_date'   => new Carbon('Friday 19 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 7 October 2025'),
                'end_date'   => new Carbon('Friday 12 December 2025'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('28 January 2025'),
                'end_date'   => new Carbon('11 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('28 April 2025'),
                'end_date'   => new Carbon('4 July 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('21 July 2025'),
                'end_date'   => new Carbon('26 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('13 October 2025'),
                'end_date'   => new Carbon('12 December 2025'),
            ],
        ]);
        
        // First, get the state ID
        // $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year 
        // Dates for 2025 for Tas not yet published
        // DB::table('terms')->insert([
        //     [
        //         'state_id'   => $state_id, 
        //         'number'     => 1,
        //         'start_date' => new Carbon('3 February 2025'),
        //         'end_date'   => new Carbon('9 April 2025'),
        //     ],
        //     [
        //         'state_id'   => $state_id, 
        //         'number'     => 2,
        //         'start_date' => new Carbon('26 April 2025'),
        //         'end_date'   => new Carbon('2 July 2025'),
        //     ],
        //     [
        //         'state_id'   => $state_id, 
        //         'number'     => 3,
        //         'start_date' => new Carbon('20 July 2025'),
        //         'end_date'   => new Carbon('24 September 2025'),
        //     ],
        //     [
        //         'state_id'   => $state_id, 
        //         'number'     => 4,
        //         'start_date' => new Carbon('11 October 2025'),
        //         'end_date'   => new Carbon('16 December 2025'),
        //     ],
        // ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('28 January 2025'),
                'end_date'   => new Carbon('4 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('22 April 2025'),
                'end_date'   => new Carbon('4 July 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('21 July 2025'),
                'end_date'   => new Carbon('19 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('6 October 2025'),
                'end_date'   => new Carbon('19 December 2025'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wed 5 February 2025'),
                'end_date'   => new Carbon('Friday 11 April 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Mon 28 April 2025'),
                'end_date'   => new Carbon('Fri 4 July 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 21 July 2025'),
                'end_date'   => new Carbon('Fri 26 September 2025'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 13 October 2025'),
                'end_date'   => new Carbon('Thu 18 December 2025'),
            ],
        ]);
                        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terms', function (Blueprint $table) {
            // no trivial way to delete just these terms
        });
    }
}
