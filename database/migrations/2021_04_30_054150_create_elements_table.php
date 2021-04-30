<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('page_id');
            $table->string('title_ru')->nullable();
            $table->string('title_by')->nullable();
            $table->string('title_en')->nullable();
            $table->string('tag_ru')->nullable();
            $table->string('tag_by')->nullable();
            $table->string('tag_en')->nullable();
            $table->text('content_ru')->nullable();
            $table->text('content_by')->nullable();
            $table->text('content_en')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('elements');
    }
}
