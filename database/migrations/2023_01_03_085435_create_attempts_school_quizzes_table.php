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
        Schema::create('attempts_school_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_student_id');
            $table->foreign('school_student_id')->references('id')->on('school_students');
            $table->string('topic_name');
            $table->string('topic_id');
            $table->string('right_ans');
            $table->string('wrong_ans');
            $table->string('perchantage');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('attempts_school_quizzes');
    }
};
