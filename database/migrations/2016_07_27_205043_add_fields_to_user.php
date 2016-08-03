<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('telephone')->nullable();
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('gender_id')->nullable();
            $table->unsignedInteger('education_id')->nullable();
            $table->unsignedInteger('age')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('telephone');
        });
    }
}
