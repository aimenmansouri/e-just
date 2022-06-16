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
        Schema::create('justifications', function (Blueprint $table) {
            $table->id();
            //code for generate qr code
            $table->string('code');
            // student ref
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('user_id')->on('students')->onDelete('cascade');
            // interval date
            $table->date('start_date');
            $table->date('end_date');
            // created by
            $table->unsignedBigInteger('by_id')->nullable();
            $table->foreign('by_id')->references('user_id')->on('admins')->onDelete('set null');;
            $table->timestamps();
            // cause
            $table->string('cause')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('justifications');
    }
};
