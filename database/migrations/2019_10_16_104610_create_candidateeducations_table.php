<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateeducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidateeducations', function (Blueprint $table) {

            $table->increments('candidate_educ_id')->zerofill();
            $table->timestamps();
            //$table->integer('candidate_profile_id');
            $table->string('degree');
            $table->string('school_type');
            $table->string('school_name');
            $table->string('city');
            $table->string('country');
            $table->string('state');
            $table->dateTime('enrolldate');
            $table->string('still_studying');
            $table->dateTime('grad_date');
            $table->dateTime('exp_graddate');
            $table->string('is_graduated');
            $table->dateTime('lastenrollyear');
            $table->string('future_study');
            $table->string('field_of_study');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidateeducations');
    }
}
