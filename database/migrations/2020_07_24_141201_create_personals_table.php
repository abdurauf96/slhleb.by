<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_ru')->nullable();
            $table->string('name_by')->nullable();
            $table->string('name_en')->nullable();
            $table->string('position_ru')->nullable();
            $table->string('position_by')->nullable();
            $table->string('position_en')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('work_time_ru')->nullable();
            $table->string('work_time_by')->nullable();
            $table->string('work_time_en')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personals');
    }
}
