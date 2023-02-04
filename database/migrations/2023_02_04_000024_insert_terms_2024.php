<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2024 extends Migration
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
                'start_date' => new Carbon('Monday 29 January 2024'),
                'end_date'   => new Carbon('Friday 12 April 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2024'),
                'end_date'   => new Carbon('Friday 5 July 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2024'),
                'end_date'   => new Carbon('Friday 27 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2024'),
                'end_date'   => new Carbon('Tuesday 17 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nsw')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 30 January 2024'),
                'end_date'   => new Carbon('Friday 12 April 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 29 April 2024'),
                'end_date'   => new Carbon('Friday 5 July 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 22 July 2024'),
                'end_date'   => new Carbon('Friday 27 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 14 October 2024'),
                'end_date'   => new Carbon('Friday 20 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'nt')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Tuesday 30 January 2024'),
                'end_date'   => new Carbon('Friday 5 April 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 15 April 2024'),
                'end_date'   => new Carbon('Friday 21 June 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Tuesday 16 July 2024'),
                'end_date'   => new Carbon('Friday 20 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 7 October 2024'),
                'end_date'   => new Carbon('Friday 13 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'qld')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Monday 22 January 2024'),
                'end_date'   => new Carbon('Thursday 28 March 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Monday 15 April 2024'),
                'end_date'   => new Carbon('Friday 21 June 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Monday 8 July 2024'),
                'end_date'   => new Carbon('Friday 13 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Monday 30 September 2024'),
                'end_date'   => new Carbon('Friday 13 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('29 January 2024'),
                'end_date'   => new Carbon('12 April 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('29 April 2024'),
                'end_date'   => new Carbon('5 July 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('22 July 2024'),
                'end_date'   => new Carbon('27 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('14 October 2024'),
                'end_date'   => new Carbon('13 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'tas')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('7 February 2024'),
                'end_date'   => new Carbon('11 April 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('29 April 2024'),
                'end_date'   => new Carbon('5 July 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('23 July 2024'),
                'end_date'   => new Carbon('27 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('14 October 2024'),
                'end_date'   => new Carbon('19 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'vic')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('29 January 2024'),
                'end_date'   => new Carbon('28 March 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('15 April 2024'),
                'end_date'   => new Carbon('28 June 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('15 July 2024'),
                'end_date'   => new Carbon('20 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('7 October 2024'),
                'end_date'   => new Carbon('20 December 2024'),
            ],
        ]);
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'wa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('Wed 31 January 2024'),
                'end_date'   => new Carbon('Thu 28 March 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('Mon 15 April 2024'),
                'end_date'   => new Carbon('Fri 28 June 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('Mon 15 July 2024'),
                'end_date'   => new Carbon('Fri 20 September 2024'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('Mon 7 October 2024'),
                'end_date'   => new Carbon('Thu 12 December 2024'),
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
