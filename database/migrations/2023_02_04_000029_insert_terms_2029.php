<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2029 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        // First, get the state ID
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('29 January 2029'),
                'end_date'   => new Carbon('13 April 2029'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('30 April 2029'),
                'end_date'   => new Carbon('6 July 2029'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('23 July 2029'),
                'end_date'   => new Carbon('28 September 2029'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('15 October 2029'),
                'end_date'   => new Carbon('14 December 2029'),
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
