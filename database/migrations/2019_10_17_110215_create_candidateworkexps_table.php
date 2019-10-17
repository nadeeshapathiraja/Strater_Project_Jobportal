<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateworkexpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidateworkexps', function (Blueprint $table) {

            $table->increments('candidate_workexp_id');
            //$table->integer('candidate_profile_id');
            $table->string('employername');
            $table->string('industry');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->string('position');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('still_working');
            $table->string('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidateworkexps');
    }
}
