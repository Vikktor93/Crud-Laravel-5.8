<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->bigIncrements('ID_Predio');
            $table->string('Localizacion', 128);
            $table->string('RUT_usuario');
            $table->string('RUT_subusuario');
            $table->timestamps();

            $table->foreign('RUT_usuario')->references('RUT_usuario')->on('users');
            $table->foreign('RUT_subusuario')->references('RUT_subusuario')->on('subusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('predios');
    }
}
