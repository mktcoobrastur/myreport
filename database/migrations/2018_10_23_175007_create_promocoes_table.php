<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promocoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hotel');
            $table->string('resumo');
            $table->string('codigo');
            $table->string('estado');
            $table->string('plano');
            $table->string('imgPrincipal');
            $table->string('imgLamina');
            $table->string('status');
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
        Schema::dropIfExists('promocoes');
    }
}
