<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKnowledgeUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_units', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',60);
          $table->unsignedInteger('order');
          $table->unsignedInteger('unit_id');
          $table->foreign('unit_id')->references('id')->on('units');
          $table->text('description',100);
          $table->string('image',50);
          $table->string('media_link',80);
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
        Schema::drop('knowledge_units');
    }
}
