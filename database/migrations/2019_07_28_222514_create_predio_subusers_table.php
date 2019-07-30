<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePredioSubusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predio_subusers', function (Blueprint $table) {
            $table->bigInteger('ID_Predio')->unsigned();
            $table->string('RUT_subusuario', 128);

            $table->foreign('ID_Predio')->references('ID_Predio')->on('predios');
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
        Schema::dropIfExists('predio_subusers');
    }
}
