<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('competition_id');
            $table->string('name_ru')->nullable();
            $table->string('name_by')->nullable();
            $table->string('name_en')->nullable();
            $table->string('desc_ru')->nullable();
            $table->string('desc_by')->nullable();
            $table->string('desc_en')->nullable();
            $table->string('image')->nullable();
            $table->integer('point')->nullable();
            $table->integer('votes')->nullable();
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
        Schema::dropIfExists('participants');
    }
}
