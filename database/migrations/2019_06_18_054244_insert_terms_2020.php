<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2021 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2020 extends Migration
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
                'start_date' => new Carbon('Monday 3 February 2020'),
                'end_date'   => new Carbon('Thursday 9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 27 April 2020'),
                'end_date'   => new Carbon('Friday 3 July 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 20 July 2020'),
                'end_date'   => new Carbon('Friday 25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 12 October 2020'),
                'end_date'   => new Carbon('Friday 18 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 28 January 2020'),
                'end_date'   => new Carbon('Thursday 9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 27 April 2020'),
                'end_date'   => new Carbon('Friday 3 July 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 20 July 2020'),
                'end_date'   => new Carbon('Friday 25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 12 October 2020'),
                'end_date'   => new Carbon('Friday 18 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 28 January 2020'),
                'end_date'   => new Carbon('Thursday 9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 20 April 2020'),
                'end_date'   => new Carbon('Friday 26 June 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 21 July 2020'),
                'end_date'   => new Carbon('Friday 25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 12 October 2020'),
                'end_date'   => new Carbon('Thursday 17 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 28 January 2020'),
                'end_date'   => new Carbon('Friday 3 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 20 April 2020'),
                'end_date'   => new Carbon('Friday 26 June 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 13 July 2020'),
                'end_date'   => new Carbon('Friday 18 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 6 October 2020'),
                'end_date'   => new Carbon('Friday 11 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('28 January 2020'),
                'end_date'   => new Carbon('9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('27 April 2020'),
                'end_date'   => new Carbon('3 July 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('20 July 2020'),
                'end_date'   => new Carbon('25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('12 October 2020'),
                'end_date'   => new Carbon('11 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wednesday 5 February 2020'),
                'end_date'   => new Carbon('Thursday 9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 27 April 2020'),
                'end_date'   => new Carbon('Friday 3 July 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 20 July 2020'),
                'end_date'   => new Carbon('Friday 25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 12 October 2020'),
                'end_date'   => new Carbon('Thursday 17 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('29 January 2020'),
                'end_date'   => new Carbon('27 March 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('14 April 2020'),
                'end_date'   => new Carbon('26 June 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('13 July 2020'),
                'end_date'   => new Carbon('18 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('5 October 2020'),
                'end_date'   => new Carbon('18 December 2020'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Mon 3 February 2020'),
                'end_date'   => new Carbon('Thu 9 April 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tue 28 April 2020'),
                'end_date'   => new Carbon('Fri 3 July 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 20 July 2020'),
                'end_date'   => new Carbon('Fri 25 September 2020'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 12 October 2020'),
                'end_date'   => new Carbon('Thu 17 December 2020'),
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
