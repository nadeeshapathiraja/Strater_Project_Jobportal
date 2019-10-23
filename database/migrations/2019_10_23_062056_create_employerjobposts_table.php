<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerjobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerjobposts', function (Blueprint $table) {

            $table->increments('jobpost_id')->zerofill();
            //$table->integer('employer_profile_id');
            $table->string('company_name')->nullable();
            $table->string('locality_city')->nullable();
            $table->string('locality_country')->nullable();
            $table->string('job_title')->nullable();
            $table->string('job_city')->nullable();
            $table->string('job_state')->nullable();
            $table->string('job_country')->nullable();
            $table->string('job_category')->nullable();
            $table->string('job_level')->nullable();
            $table->string('job_type')->nullable();
            $table->string('salary_currency')->nullable();
            $table->decimal('salary_max')->nullable();
            $table->decimal('salary_min')->nullable();
            $table->text('job_description')->nullable();
            $table->longText('logo_url')->nullable();
            $table->longText('banner_url')->nullable();
            $table->enum('application_receive_mode', ['url','email'])->nullable();
            $table->integer('notification_type')->nullable();
            $table->longText('company_url')->nullable();
            $table->text('company_email')->nullable();
            $table->enum('status', ['draft','posted','terminated','expired'])->nullable();
            $table->date('posted_at')->nullable();
            $table->integer('posted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->string('is_confidential')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employerjobposts');
    }
}
