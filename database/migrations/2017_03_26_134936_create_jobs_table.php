<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('job_title');
            $table->string('qualification');
            $table->string('designation');
            $table->string('key_skills');
            $table->string('job_description');
            $table->string('job_location');
            $table->integer('experience');
            $table->string('end_date');
            $table->double('salary');
            $table->string('company_name');
            $table->string('company_details');
            $table->binary('image');
            $table->string('path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
