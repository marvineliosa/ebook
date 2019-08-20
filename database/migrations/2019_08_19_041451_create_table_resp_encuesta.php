<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRespEncuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_resp_encuesta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('edad');
            $table->string('sexo');
            $table->integer('grado');
            $table->string('escuela');
            $table->string('estado');
            $table->text('descripcion');
            $table->string('user');
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
        Schema::dropIfExists('table_resp_encuesta');
    }
}
