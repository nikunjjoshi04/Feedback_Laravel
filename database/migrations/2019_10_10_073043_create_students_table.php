<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('sem_id')->unsigned();
            $table->bigInteger('div_id')->unsigned();
            $table->string('e_no');
            $table->string('name');
            $table->string('email');
            $table->biginteger('phone_number');
            $table->string('address');
            $table->foreign('class_id')->references('id')->on('clas');
            $table->foreign('sem_id')->references('id')->on('sems');
            $table->foreign('div_id')->references('id')->on('divs');
            $table->string('password');
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
        Schema::dropIfExists('students');
    }
}
