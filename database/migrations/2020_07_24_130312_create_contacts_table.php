<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('addres_ru')->nullable();
            $table->string('addres_by')->nullable();
            $table->string('addres_en')->nullable();
            $table->string('email_addres')->nullable();
            $table->string('unn')->nullable();
            $table->string('okpo')->nullable();
            $table->string('phone')->nullable();
            $table->string('schot')->nullable();
            $table->string('kod')->nullable();
            $table->string('bank_ru')->nullable();
            $table->string('bank_by')->nullable();
            $table->string('bank_en')->nullable();
            $table->text('work_time_ru')->nullable();
            $table->text('work_time_by')->nullable();
            $table->text('work_time_en')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
