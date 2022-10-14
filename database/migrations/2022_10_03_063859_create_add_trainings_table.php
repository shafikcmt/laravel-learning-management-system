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
        Schema::create('add_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('event');
            $table->string('instructor_name');
            $table->string('from');
            $table->string('to');
            $table->string('organiged_by');
            $table->string('course_completion');
            $table->string('place');
            $table->string('learning_type');
            $table->string('certificate_id');
            $table->string('type_of_campus');
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('add_trainings');
    }
};
