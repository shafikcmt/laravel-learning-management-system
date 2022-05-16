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
        Schema::create('coursemaps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->foreignId('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreignId('batch_id');
            $table->foreign('batch_id')->references('id')->on('batches');
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
        Schema::dropIfExists('coursemaps');
    }
};
