<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2020 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2019 extends Migration
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
                'start_date' => new Carbon('Monday 4 February 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2019'),
                'end_date'   => new Carbon('Friday 5 July 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Thursday 19 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 29 January 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2019'),
                'end_date'   => new Carbon('Friday 5 July 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Friday 20 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 29 January 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 23 April 2019'),
                'end_date'   => new Carbon('Friday 28 June 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 23 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Friday 13 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 29 January 2019'),
                'end_date'   => new Carbon('Friday 5 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 23 April 2019'),
                'end_date'   => new Carbon('Friday 28 June 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 15 July 2019'),
                'end_date'   => new Carbon('Friday 20 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 8 October 2019'),
                'end_date'   => new Carbon('Friday 13 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 29 January 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2019'),
                'end_date'   => new Carbon('Friday 5 July 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Friday 13 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 4 February 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2019'),
                'end_date'   => new Carbon('Friday 5 July 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Friday 20 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 29 January 2019'),
                'end_date'   => new Carbon('Friday 5 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 23 April 2019'),
                'end_date'   => new Carbon('Friday 28 June 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 15 July 2019'),
                'end_date'   => new Carbon('Friday 20 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 7 October 2019'),
                'end_date'   => new Carbon('Friday 20 December 2019'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 4 February 2019'),
                'end_date'   => new Carbon('Friday 12 April 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2019'),
                'end_date'   => new Carbon('Friday 5 July 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2019'),
                'end_date'   => new Carbon('Friday 27 September 2019'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2019'),
                'end_date'   => new Carbon('Thursday 19 December 2019'),
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
