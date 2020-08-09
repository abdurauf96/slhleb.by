<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_steps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('recipe_id');
            $table->text('title_ru')->nullable();
            $table->text('title_by')->nullable();
            $table->text('title_en')->nullable();
            $table->string('image')->nullable();
            
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
        Schema::dropIfExists('meal_steps');
    }
}
