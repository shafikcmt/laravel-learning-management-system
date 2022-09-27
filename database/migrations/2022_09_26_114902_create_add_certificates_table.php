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
        Schema::create('add_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_name');
            $table->string('certificate_from');
            $table->string('instructor_name');
            $table->string('score');
            $table->string('year_of_pass');
            $table->string('test_center_name');
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
        Schema::dropIfExists('add_certificates');
    }
};
