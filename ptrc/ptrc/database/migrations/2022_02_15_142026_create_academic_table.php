<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('institute');
            $table->string('degree');
            $table->integer('pass_year');
            $table->integer('total_pass');
            $table->integer('obt_mark');
            $table->float('cgp');
            $table->string('pic_matric');
            $table->string('pic_fsc');
            $table->string('pic_master');
            $table->string('pic_phd');
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
        Schema::dropIfExists('academic');
    }
}
