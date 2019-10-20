<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            $table->bigInteger('que1');
            $table->bigInteger('que2');
            $table->bigInteger('que3');
            $table->bigInteger('que4');
            $table->bigInteger('que5');
            $table->bigInteger('que6');
            $table->bigInteger('que7');
            $table->bigInteger('que8');
            $table->bigInteger('que9');
            $table->bigInteger('que10');
            $table->bigInteger('que11');
            $table->bigInteger('que12');
            $table->string('que13');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('teacher_id')->references('id')->on('teachers');
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
        Schema::dropIfExists('feedback');
    }
}
