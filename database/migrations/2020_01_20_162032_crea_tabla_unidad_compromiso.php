<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaTablaUnidadCompromiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compromiso', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('user');
                $table->string('unidad');
                $table->string('pagina');

                $table->string('nombre');
                $table->string('compromiso_individual');
                $table->string('compromiso_grupal');
                $table->string('tutor');
                $table->string('familiar_1');
                $table->string('familiar_2');
                $table->string('familiar_3');
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
        Schema::dropIfExists('compromiso');
    }
}
