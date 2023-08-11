<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRollnoSlipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rollno_slip', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('job_id');
            $table->integer('challan_id');
            $table->integer('roll_no');
            $table->string('address');
            $table->string('center');
            $table->timestamp('date');
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
        Schema::dropIfExists('rollno_slip');
    }
}
