<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('project_title');
            $table->string('project_category');
            $table->string('skills');
            $table->string('other_skills');
            $table->integer('number_of_openings');
            $table->string('job_description');
            $table->string('job_location');
            $table->string('start_date');
            $table->string('end_date');
            $table->double('salary');
            $table->string('company_name');
            $table->text('company_description');
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
        Schema::drop('projects');
    }
}
