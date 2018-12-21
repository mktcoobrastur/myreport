<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoteisdiamanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteisdiamante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod');
            $table->string('hotel');
            $table->string('estado');
            $table->string('cidade');
            $table->string('img');
            $table->longText('texto');
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
        Schema::dropIfExists('hoteisdiamante');
    }
}
