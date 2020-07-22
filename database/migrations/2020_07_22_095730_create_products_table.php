<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('category_id')->nullable();
            $table->integer('filter_id')->nullable();
            $table->string('protein')->nullable();
            $table->string('carbo')->nullable();
            $table->string('fat')->nullable();
            $table->string('callory')->nullable();
            $table->string('image')->nullable();
            $table->string('images')->nullable();
            $table->string('image_in')->nullable();
            $table->string('image_out')->nullable();
            $table->string('weight')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
