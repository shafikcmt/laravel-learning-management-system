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
        Schema::create('course_batches', function (Blueprint $table) {
            // $table->id();
            // $table->unsignedBigInteger('course_id');
            // $table->foreign('course_id')->references('id')->on('courses');
            // $table->unsignedBigInteger('batch_id');
            // $table->foreign('batch_id')->references('id')->on('batches');
            // $table->timestamps();

            $table->id();
            $table->string('course_id');
            $table->string('batch_id');
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
        Schema::dropIfExists('course_batches');
    }
};
