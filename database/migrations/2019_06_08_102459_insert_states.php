<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertStates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::table('states')->insert([
            ['code' => 'act', 'name' => 'Australian Capital Territory'],
            ['code' => 'nsw', 'name' => 'New South Wales'],
            ['code' => 'nt',  'name' => 'Northern Territory'],
            ['code' => 'qld', 'name' => 'Queensland'],
            ['code' => 'sa',  'name' => 'South Australia'],
            ['code' => 'tas', 'name' => 'Tasmania'],
            ['code' => 'vic', 'name' => 'Victoria'],
            ['code' => 'wa',  'name' => 'Western Australia'],
        ]);
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->delete();
    }
}
