<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user_id');
            $table->string('university');
            $table->string('institute');
            $table->string('degree');
            $table->string('specialization');
            $table->string('year');
            $table->string('score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('educational__details');
    }
}
