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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('topic_id');
            $table->foreign('topic_id')->references('id')->on('qtopic');
            $table->foreignId('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->string('sub_category');
            $table->string('marks');
            $table->string('image');
            $table->string('question');
            $table->string('correct_answer');
            $table->string('option_one');
            $table->string('option_two');
            $table->string('option_three');
            $table->string('option_four');
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
        Schema::dropIfExists('questions');
    }
};
