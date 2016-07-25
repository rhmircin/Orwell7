<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',60);
          $table->unsignedInteger('order');
          $table->unsignedInteger('course_id');
          $table->foreign('course_id')->references('id')->on('courses');
          $table->text('description',100);
          $table->string('image',50);
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('units');
    }
}
