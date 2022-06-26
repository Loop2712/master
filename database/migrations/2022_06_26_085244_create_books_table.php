<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('id_room')->nullable();
            $table->string('sub_name')->nullable();
            $table->integer('professor')->nullable();
            $table->date('day')->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->text('esc')->nullable();
            $table->string('user_id')->nullable();
            $table->string('phone')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');
    }
}
