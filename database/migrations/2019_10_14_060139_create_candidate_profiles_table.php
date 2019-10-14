<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_profiles', function (Blueprint $table) {
            
            $table->increments('candidate_profile_id')->zerofill();
            $table->integer('account_id');
            $table->string('profile_image')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('telephone');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zipcode');
            $table->string('profile_picture');
            $table->integer('fresh_graduate');
            $table->string('nationality');
            $table->string('country_residingin');
            $table->string('state_residingin');
            $table->string('working_since');
            $table->string('prefered_category');
            $table->string('prefered_level');
            $table->string('prefered_type');
            $table->string('prefered_salary_currency');
            $table->decimal('prefered_salary');
            $table->string('prefered_location');
            $table->text('about_myself');
            $table->string('gender');
            $table->dateTime('date_of_birth');
            $table->longText('core_skills');
            $table->string('race');
            $table->string('prefered_location2');
            $table->string('prefered_location3');
            $table->string('prefered_industry');
            $table->string('acc_name');
            $table->string('acc_no');
            $table->string('bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_profiles');
    }
}
