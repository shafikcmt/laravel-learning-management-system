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
        Schema::create('attempt_quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('student_id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_class');
            $table->string('student_branch');
            $table->string('student_semester');
            $table->string('student_mobile');
            $table->string('student_email');
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
        Schema::dropIfExists('attempt_quizzes');
    }
};
