<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cid')->unsigned();
            $table->string('sem');
            $table->foreign('cid')->references('id')->on('clas');
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
        Schema::dropIfExists('sems');
    }
}
