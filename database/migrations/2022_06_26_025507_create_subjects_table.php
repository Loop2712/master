<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_sub')->nullable();
            $table->string('sub_name')->nullable();
            $table->integer('professor')->nullable();
            $table->string('day');
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->integer('sub_room_id')->nullable();
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
        Schema::drop('subjects');
    }
}
