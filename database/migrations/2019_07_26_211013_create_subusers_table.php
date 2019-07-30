<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subusers', function (Blueprint $table) {
            $table->string('RUT_subusuario', 128)->primary();
            $table->string('Password', 128);
            $table->string('Username', 150);
            $table->string('Firstname', 150);
            $table->string('Lastname', 150);
            $table->string('email', 150)->unique();
            $table->string('RUT_usuario', 128);
            $table->timestamps();


            $table->foreign('RUT_usuario')->references('RUT_usuario')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subusers');
    }
}
