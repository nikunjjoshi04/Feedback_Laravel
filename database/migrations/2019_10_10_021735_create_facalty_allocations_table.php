<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacaltyAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facalty_allocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('sem_id')->unsigned();
            $table->bigInteger('div_id')->unsigned();
            $table->bigInteger('subject_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreign('class_id')->references('id')->on('clas');
            $table->foreign('sem_id')->references('id')->on('sems');
            $table->foreign('div_id')->references('id')->on('divs');
            $table->foreign('subject_id')->references('id')->on('subjects');
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
        Schema::dropIfExists('facalty_allocations');
    }
}
