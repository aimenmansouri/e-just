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
        Schema::create('absents', function (Blueprint $table) {
            $table->id();
            //student ref
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('user_id')->on('students')->onDelete('cascade');
            //created by
            $table->unsignedBigInteger('by_id')->nullable();
            $table->foreign('by_id')->references('id')->on('users')->onDelete('set null');
            //classe name
            $table->string('class');
            // absent date
            $table->date('absent_date');
            //justification
            $table->unsignedBigInteger('just_id')->nullable();
            $table->foreign('just_id')->references('id')->on('justifications')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absents');
    }
};
