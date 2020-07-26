<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title_ru')->nullable();
            $table->string('title_by')->nullable();
            $table->string('title_en')->nullable();
            $table->text('desc_ru')->nullable();
            $table->text('desc_by')->nullable();
            $table->text('desc_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_by')->nullable();
            $table->text('content_en')->nullable();
            $table->string('image')->nullable();
            $table->string('key')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
