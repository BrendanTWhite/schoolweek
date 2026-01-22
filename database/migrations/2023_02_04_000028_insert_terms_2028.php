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
        $state_id = DB::table('states')->where('code', 'sa')->value('id');
        // Then insert the terms for this state for this year
        DB::table('terms')->insert([
            [
                'state_id'   => $state_id, 
                'number'     => 1,
                'start_date' => new Carbon('31 January 2028'),
                'end_date'   => new Carbon('13 April 2028'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('1 May 2028'),
                'end_date'   => new Carbon('7 July 2028'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('24 July 2028'),
                'end_date'   => new Carbon('29 September 2028'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('16 October 2028'),
                'end_date'   => new Carbon('15 December 2028'),
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
