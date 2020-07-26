<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_ru')->nullable();
            $table->string('title_by')->nullable();
            $table->string('title_en')->nullable();
            $table->text('body_ru')->nullable();
            $table->text('body_by')->nullable();
            $table->text('body_en')->nullable();
            $table->string('image')->nullable();
            $table->string('category_id')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stories');
    }
}
