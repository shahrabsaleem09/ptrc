<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('designaation');
            $table->string('orga_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('retired', ['Yes', 'No']);
            $table->string('dept_name');
            $table->float('pic_discharge');
            $table->enum('experience', ['Yes', 'No']);
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
        Schema::dropIfExists('experience');
    }
}
