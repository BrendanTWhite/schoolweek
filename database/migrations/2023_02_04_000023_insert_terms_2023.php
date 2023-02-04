<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2023 extends Migration
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
                'start_date' => new Carbon('Friday 27 January 2023'),
                'end_date'   => new Carbon('Thursday 6 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 24 April 2023'),
                'end_date'   => new Carbon('Friday 30 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 17 July 2023'),
                'end_date'   => new Carbon('Friday 22 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 9 October 2023'),
                'end_date'   => new Carbon('Friday 15 December 2023'),
            ],
        ]);

        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Friday 27 January 2023'),
                'end_date'   => new Carbon('Thursday 6 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 24 April 2023'),
                'end_date'   => new Carbon('Friday 30 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 17 July 2023'),
                'end_date'   => new Carbon('Friday 22 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 9 October 2023'),
                'end_date'   => new Carbon('Tuesday 19 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 31 January 2023'),
                'end_date'   => new Carbon('Thursday 6 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 17 April 2023'),
                'end_date'   => new Carbon('Friday 23 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 18 July 2023'),
                'end_date'   => new Carbon('Friday 22 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 9 October 2023'),
                'end_date'   => new Carbon('Friday 15 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 23 January 2023'),
                'end_date'   => new Carbon('Friday 31 March 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 17 April 2023'),
                'end_date'   => new Carbon('Friday 23 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 10 July 2023'),
                'end_date'   => new Carbon('Friday 15 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Tuesday 3 October 2023'),
                'end_date'   => new Carbon('Friday 8 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('30 January 2023'),
                'end_date'   => new Carbon('14 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('1 May 2023'),
                'end_date'   => new Carbon('7 July 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('24 July 2023'),
                'end_date'   => new Carbon('29 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('16 October 2023'),
                'end_date'   => new Carbon('15 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('8 February 2023'),
                'end_date'   => new Carbon('5 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('26 April 2023'),
                'end_date'   => new Carbon('7 July 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('25 July 2023'),
                'end_date'   => new Carbon('29 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('16 October 2023'),
                'end_date'   => new Carbon('21 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('27 January 2023'),
                'end_date'   => new Carbon('6 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('24 April 2023'),
                'end_date'   => new Carbon('23 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('10 July 2023'),
                'end_date'   => new Carbon('15 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('2 October 2023'),
                'end_date'   => new Carbon('20 December 2023'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wed 1 February 2023'),
                'end_date'   => new Carbon('Thu 6 April 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Mon 24 April 2023'),
                'end_date'   => new Carbon('Fri 30 June 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 17 July 2023'),
                'end_date'   => new Carbon('Fri 22 September 2023'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 9 October 2023'),
                'end_date'   => new Carbon('Thu 14 December 2023'),
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
