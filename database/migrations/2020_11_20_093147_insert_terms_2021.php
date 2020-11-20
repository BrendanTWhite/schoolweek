<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2022 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2021 extends Migration
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
                'start_date' => new Carbon('1 February 2021'),
                'end_date'   => new Carbon('Thursday 1 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 19 April 2021'),
                'end_date'   => new Carbon('Friday 25 June 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 12 July 2021'),
                'end_date'   => new Carbon('Friday 17 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 5 October 2021'),
                'end_date'   => new Carbon('Friday 17 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wednesday 27 January 2021'),
                'end_date'   => new Carbon('Thursday 1 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 19 April 2021'),
                'end_date'   => new Carbon('Friday 25 June 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 12 July 2021'),
                'end_date'   => new Carbon('Friday 17 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 5 October 2021'),
                'end_date'   => new Carbon('Friday 17 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 1 February 2021'),
                'end_date'   => new Carbon('Friday 9 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 19 April 2021'),
                'end_date'   => new Carbon('Friday 25 June 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 20 July 2021'),
                'end_date'   => new Carbon('Friday 24 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 11 October 2021'),
                'end_date'   => new Carbon('Thursday 16 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wednesday 27 January 2021'),
                'end_date'   => new Carbon('Thursday 1 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 19 April 2021'),
                'end_date'   => new Carbon('Friday 25 June 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 12 July 2021'),
                'end_date'   => new Carbon('Friday 17 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 5 October 2021'),
                'end_date'   => new Carbon('Friday 10 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('27 January 2021'),
                'end_date'   => new Carbon('9 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('27 April 2021'),
                'end_date'   => new Carbon('2 July 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('19 July 2021'),
                'end_date'   => new Carbon('24 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('11 October 2021'),
                'end_date'   => new Carbon('10 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('3 February 2021'),
                'end_date'   => new Carbon('9 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('26 April 2021'),
                'end_date'   => new Carbon('2 July 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('20 July 2021'),
                'end_date'   => new Carbon('24 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('11 October 2021'),
                'end_date'   => new Carbon('16 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('28 January 2021'),
                'end_date'   => new Carbon('1 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('19 April 2021'),
                'end_date'   => new Carbon('25 June 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('12 July 2021'),
                'end_date'   => new Carbon('17 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('4 October 2021'),
                'end_date'   => new Carbon('17 December 2021'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Mon 1 February 2021'),
                'end_date'   => new Carbon('Thu 1 April 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Mon 19 April 2021'),
                'end_date'   => new Carbon('Fri 2 July 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 19 July 2021'),
                'end_date'   => new Carbon('Fri 24 September 2021'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 11 October 2021'),
                'end_date'   => new Carbon('Thu 16 December 2021'),
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
