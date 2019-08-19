<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRespCompromiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_resp_compromiso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('compromiso');
            $table->string('compromisogrupal');
            $table->string('ayuda1');
            $table->string('ayuda2');
            $table->string('familiar1');
            $table->string('familiar2');
            $table->string('familiar3');
            $table->integer('uset');
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
        Schema::dropIfExists('table_resp_compromiso');
    }
}
