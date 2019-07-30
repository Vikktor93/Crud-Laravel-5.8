<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotrerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potreros', function (Blueprint $table) {
            $table->bigIncrements('ID_potrero');
            $table->string('Tipo', 128);
            $table->double('superficie');
            $table->bigInteger('ID_Predio')->unsigned();
            $table->timestamps();


            $table->foreign('ID_Predio')->references('ID_Predio')->on('predios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('potreros');
    }
}
