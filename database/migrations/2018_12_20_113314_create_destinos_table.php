<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('destino');
            $table->string('img_turismo');
            $table->longText('pagina_turismo');

            $table->string('img_cultura');
            $table->longText('pagina_cultura');

            $table->string('img_noite');
            $table->longText('pagina_noite');
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
        Schema::dropIfExists('destinos');
    }
}
