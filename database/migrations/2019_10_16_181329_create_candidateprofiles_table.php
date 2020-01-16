<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidateprofiles', function (Blueprint $table) {

            $table->increments('candidate_profile_id');
            $table->timestamps();
            //$table->integer('account_id');
            $table->string('image')->nullable()->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('telephone')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->integer('fresh_graduate')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country_residingin')->nullable();
            $table->string('state_residingin')->nullable();
            $table->string('working_since')->nullable();
            $table->string('prefered_category')->nullable();
            $table->string('prefered_level')->nullable();
            $table->string('prefered_type')->nullable();
            $table->string('prefered_salary_currency')->nullable();
            $table->decimal('prefered_salary')->nullable();
            $table->string('prefered_location')->nullable();
            $table->text('about_myself')->nullable();
            $table->string('gender')->nullable();
            $table->dateTime('date_of_birth')->nullable();
            $table->longText('core_skills')->nullable();
            $table->string('race')->nullable();
            $table->string('prefered_location2')->nullable();
            $table->string('prefered_location3')->nullable();
            $table->string('prefered_industry')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('bank')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidateprofiles');
    }
}
