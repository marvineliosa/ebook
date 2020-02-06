<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaUnidadComentariosPositivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comentarios_positivos', function (Blueprint $table)
          {
              $table->bigIncrements('id');
              $table->string('user');
              $table->string('unidad');
              $table->string('pagina');
              $table->string('comentario_negativo');
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
        Schema::dropIfExists('comentarios_positivos');
    }
}
