<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name_ru')->nullable();
            $table->string('name_by')->nullable();
            $table->string('name_en')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('story_categories');
    }
}
