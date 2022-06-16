<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teache', function (Blueprint $table) {
            // link to the teachers table
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('user_id')->on('teachers')->onDelete('cascade');
            // link to the groupe table
            $table->unsignedBigInteger('groupe_id');
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teache');
    }
};
