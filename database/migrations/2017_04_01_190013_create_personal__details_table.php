<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dob');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personal__details');
    }
}
