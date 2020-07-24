<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appeals', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type')->nullable();
            $table->string('name')->nullable();
            $table->string('addres')->nullable();
            $table->string('phone')->nullable();
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->text('msg')->nullable();
            $table->string('file')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appeals');
    }
}
