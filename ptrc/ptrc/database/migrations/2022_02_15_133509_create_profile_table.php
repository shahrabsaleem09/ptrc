<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('job_id');
            $table->string('name');
            $table->string('f_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->bigInteger('cnic');
            $table->string('religious');
            $table->string('nationality');
            $table->Date('dob');
            $table->string('place_of_birth');
            $table->string('email');
            $table->string('div_domicel');
            $table->string('pro_domicle');
            $table->string('dis_domicel');
            $table->string('postal_city');
            $table->text('postal_addr');
            $table->integer('phone');
            $table->integer('phone_res');
            $table->integer('phone_office');
            $table->integer('emer_no');
            $table->string('emer_name');
            $table->string('emer_rel');
            $table->enum('disable', ['Yes', 'No']);
            $table->string('pic');
            $table->string('idcard_front');
            $table->string('idcard_back');
            $table->rememberToken();
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
        Schema::dropIfExists('profile');
    }
}
