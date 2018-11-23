<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('usuario');
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->string('fone')->nullable();
            $table->string('motivo');
            $table->longText('mensagem')->nullable();
            $table->longText('entendimento')->nullable();
            $table->longText('solucao')->nullable();
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
        Schema::dropIfExists('chamados');
    }
}
