<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('internship_title');
            $table->string('internship_category');
            $table->string('skills');
            $table->string('other_skills');
            $table->integer('number_of_openings');
            $table->string('job_description');
            $table->string('job_location');
            $table->string('start_date');
            $table->string('end_date');
            $table->double('salary');
            $table->string('company_name');
            $table->string('company_description');
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
        Schema::drop('internships');
    }
}
