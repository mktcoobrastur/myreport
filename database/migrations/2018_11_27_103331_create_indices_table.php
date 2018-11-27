<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mes');
            $table->string('indice');
            $table->date('periodoinicio');
            $table->date('periodofinal');
            $table->string('atendidas');
            $table->string('voltarianegocio');
            $table->string('solucao');
            $table->string('reclamacoestotal');
            $table->string('reclamacoesatendidas');
            $table->string('reclamacoesnaoatendidas');
            $table->string('temporesposta');
            $table->string('notaconsumidor');
            $table->string('avaliacoes');
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
        Schema::dropIfExists('indices');
    }
}
