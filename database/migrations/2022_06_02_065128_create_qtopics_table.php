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
        Schema::create('qtopics', function (Blueprint $table) {
            $table->id();
            $table->string('topic_name');
            $table->string('total_question');
            $table->string('total_time');
            $table->unsignedBigInteger('qcategory_id');
            $table->foreign('qcategory_id')->references('id')->on('qcategories');
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
        Schema::dropIfExists('qtopics');
    }
};
