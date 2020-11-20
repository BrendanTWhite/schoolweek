<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2022 extends Migration
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
                'start_date' => new Carbon('31 January 2022'),
                'end_date'   => new Carbon('Friday 8 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 26 April 2022'),
                'end_date'   => new Carbon('Friday 1 July 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 18 July 2022'),
                'end_date'   => new Carbon('Friday 23 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 10 October 2022'),
                'end_date'   => new Carbon('Friday 16 December 2022'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Friday 28 January 2022'),
                'end_date'   => new Carbon('Friday 8 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 26 April 2022'),
                'end_date'   => new Carbon('Friday 1 July 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 18 July 2022'),
                'end_date'   => new Carbon('Friday 23 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 10 October 2022'),
                'end_date'   => new Carbon('Tuesday 20 December 2022'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 31 January 2022'),
                'end_date'   => new Carbon('Friday 8 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 19 April 2022'),
                'end_date'   => new Carbon('Friday 24 June 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 19 July 2022'),
                'end_date'   => new Carbon('Friday 23 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 10 October 2022'),
                'end_date'   => new Carbon('Thursday 15 December 2022'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 24 January 2022'),
                'end_date'   => new Carbon('Friday 1 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tuesday 19 April 2022'),
                'end_date'   => new Carbon('Friday 24 June 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 11 July 2022'),
                'end_date'   => new Carbon('Friday 16 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 4 October 2022'),
                'end_date'   => new Carbon('Friday 9 December 2022'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('31 January 2022'),
                'end_date'   => new Carbon('14 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('2 May 2022'),
                'end_date'   => new Carbon('8 July 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('25 July 2022'),
                'end_date'   => new Carbon('30 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('17 October 2022'),
                'end_date'   => new Carbon('16 December 2022'),
            ],
        ]);
        /* Tas holidays for 2022 are not yet available
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wednesday 5 February 2022'),
                'end_date'   => new Carbon('Thursday 9 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 27 April 2022'),
                'end_date'   => new Carbon('Friday 3 July 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 20 July 2022'),
                'end_date'   => new Carbon('Friday 25 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 12 October 2022'),
                'end_date'   => new Carbon('Thursday 17 December 2022'),
            ],
        ]);
        */
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('31 January 2022'),
                'end_date'   => new Carbon('8 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('26 April 2022'),
                'end_date'   => new Carbon('24 June 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('11 July 2022'),
                'end_date'   => new Carbon('16 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('3 October 2022'),
                'end_date'   => new Carbon('20 December 2022'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Mon 31 January 2022'),
                'end_date'   => new Carbon('Fri 8 April 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Tue 26 April 2022'),
                'end_date'   => new Carbon('Fri 1 July 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 18 July 2022'),
                'end_date'   => new Carbon('Fri 23 September 2022'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 10 October 2022'),
                'end_date'   => new Carbon('Thu 15 December 2022'),
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
