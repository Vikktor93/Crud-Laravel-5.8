<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisponibilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->double('ndvi');
            $table->bigInteger('ID_potrero')->unsigned();
            $table->timestamps();


            $table->foreign('ID_potrero')->references('ID_potrero')->on('potreros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disponibilidads');
    }
}
