<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_languages', function (Blueprint $table) {

            $table->increments('candidate_lang_id');
            $table->timestamps();
            //$table->integer('candidate_profile_id');
            $table->string('language_code');
            $table->string('spoken_level');
            $table->string('written_level');
            $table->string('default');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_languages');
    }
}
