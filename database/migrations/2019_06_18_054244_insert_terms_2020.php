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
        Schema::table('terms', function (Blueprint $table) {
            //
        });
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
