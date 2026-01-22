<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

// To create next year's migration:
// php artisan make:migration insert_terms_2023 --table=terms

// After inserting terms, go to /weeks/generate in a browswer to generate weeks

class InsertTerms2030 extends Migration
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
                'start_date' => new Carbon('29 January 2030'),
                'end_date'   => new Carbon('12 April 2030'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 2,
                'start_date' => new Carbon('29 April 2030'),
                'end_date'   => new Carbon('5 July 2030'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 3,
                'start_date' => new Carbon('22 July 2030'),
                'end_date'   => new Carbon('27 September 2030'),
            ],
            [
                'state_id'   => $state_id, 
                'number'     => 4,
                'start_date' => new Carbon('14 October 2030'),
                'end_date'   => new Carbon('13 December 2030'),
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
