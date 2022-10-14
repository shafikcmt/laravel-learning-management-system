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
        Schema::create('hackathons', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('instructor_name');
            $table->string('from');
            $table->string('to');
            $table->string('organiged_by');
            $table->string('learning_type');
            $table->string('event');
            $table->string('total_hours');
            $table->string('certificate_id');
            $table->string('type_of_campus');
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
        Schema::dropIfExists('hackathons');
    }
};
