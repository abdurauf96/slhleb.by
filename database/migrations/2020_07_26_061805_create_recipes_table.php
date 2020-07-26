<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tag_id')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_by')->nullable();
            $table->string('name_en')->nullable();
            $table->text('consist_ru')->nullable();
            $table->text('consist_by')->nullable();
            $table->text('consist_en')->nullable();
            $table->string('image')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recipes');
    }
}
