<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_applications', function (Blueprint $table) {

            $table->increments('candidate_application_id');
            $table->timestamps();
            //$table->integer('candidate_profile_id');
            //$table->integer('employer_profile_id');
            //$table->integer('jobpost_id');
            // $table->enum('status', ['applied', 'withdrawn']);
            // $table->enum('emp_status', ['interview_invite', 'shortlist','not_suitabl']);
            // $table->enum('interview_status', ['accept', 'reject']);
            // $table->enum('final_status', ['success', 'failure']);
            $table->string('emp_action_by');
            $table->date('emp_action_at');
            $table->date('cand_action_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_applications');
    }
}
